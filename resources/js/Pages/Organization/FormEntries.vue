<template>
  <OrganizationLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Management Dashboard department
      </h2>
    </template>
    {{ selectedDisplayName }}
    <a-select
      v-model:value="selectedDisplayName"
      style="width: 120px"
      :options="entryColumns.filter((c) => c.dataIndex.substring(0, 6) == 'extra_')"
      :field-names="{ value: 'dataIndex', label: 'title' }"
    />
    <a-button @click="createEventAttendees" :disabled="!selectedDisplayName"
      >Event Attendees</a-button
    >
    <a-table
      :dataSource="entries"
      :columns="entryColumns"
      :row-selection="{ onChange: onChangeSelection, selectedRowKeys: selectedItems }"
      :rowKey="(record) => record.id"
    >
      <template #bodyCell="{ column, text, record, index }">
        <template v-if="column.dataIndex == 'operation'">
          <a-button @click="viewRecord(record)">{{ $t("view") }}</a-button>
          <a-popconfirm
            :title="$t('confirm_delete_record')"
            :ok-text="$t('yes')"
            :cancel-text="$t('no')"
            @confirm="deleteRecord(record)"
          >
            <a-button>{{ $t("delete") }}</a-button>
          </a-popconfirm>
        </template>

        <template v-else-if="column.dataIndex == 'created_at'">
          {{ record[column.dataIndex] }}
        </template>
        <template v-else>
          {{ record[column.dataIndex] }}
        </template>
      </template>
    </a-table>

    <!-- Modal Start-->
    <a-modal v-model:visible="modal.isOpen" title="View Only" width="60%">
      <ol>
        <li v-for="(field, idx) in form.fields" :key="idx">
          {{ field.field_name ? field.field_name : "Field_" + (idx + 1) }}:
          <template v-if="field.type == 'photo'">
            <img :src="getFieldValue(field)" />
          </template>
          <template v-else-if="field.type == 'radio' && field.options">
            {{
              getFieldValue(field)
                ? JSON.parse(field.options).find((x) => x.value == getFieldValue(field))
                    .label
                : ""
            }}
          </template>
          <template v-else-if="field.type == 'checkbox'">
            {{
              getFieldValue(field)
                ? JSON.parse(getFieldValue(field))
                    .map((x) => {
                      return JSON.parse(field.options).find((y) => y.value == x).label;
                    })
                    .join(",")
                : ""
            }}
          </template>
          <template v-else>
            {{ getFieldValue(field) }}
          </template>
        </li>
      </ol>
    </a-modal>
    <!-- Modal End-->
  </OrganizationLayout>
</template>

<script>
import OrganizationLayout from "@/Layouts/OrganizationLayout.vue";

export default {
  components: {
    OrganizationLayout,
  },
  props: ["form", "entries", "entryColumns"],
  data() {
    return {
      selectedDisplayName: null,
      rowSelection: {},
      selectedItems: [],
      modal: {
        isOpen: false,
        data: {},
        title: "Modal",
        mode: "",
      },
    };
  },
  methods: {
    onChangeSelection(a, b) {
      this.selectedItems = a;
    },
    createEventAttendees() {
      var data = {};
      this.entries.forEach((entry) => {
        if (this.selectedItems.includes(entry.id)) {
          if (entry[this.selectedDisplayName]) {
            data[entry.id] = { display_name: entry[this.selectedDisplayName] };
          }
        }
      });
      this.$inertia.post(route("manage.form.createEventAttendees", this.form.id), data, {
        onSuccess: (page) => {
          this.modal.isOpen = false;
          this.imageUrl = null;
          console.log("created");
        },
        onError: (err) => {
          console.log(err);
        },
      });
    },
    viewRecord(record) {
      this.modal.data = record;
      this.modal.isOpen = true;
    },
    deleteRecord(record) {
      this.$inertia.delete(
        route("manage.form.entries.destroy", { form: this.form, entry: record }),
        {
          onSuccess: (page) => {
            message.success($t("delete_success"));
          },
          onError: (err) => {
            console.log(err);
          },
        }
      );
    },
    getFieldValue(field) {
      const fv = this.modal.data.records.find((r) => r.form_field_id == field.id);
      if (fv) {
        return fv.field_value;
      }
      return "";
    },
  },
};
</script>
