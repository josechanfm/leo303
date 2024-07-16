<template>
  <OrganizationLayout :title="$t('email.management')">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $t("email.management") }}
      </h2>
    </template>
      <div class="flex-auto pb-3 text-right">
        <inertia-link
          :href="route('manage.emails.create')"
          class="ant-btn ant-btn-primary"
          >{{ $t("email.create") }}</inertia-link
        >
      </div>
      <div class="bg-white relative shadow rounded-lg overflow-x-auto">
        <a-table :dataSource="emails.data" :columns="columns">
          <template #headerCell="{ column }">
            {{ column.i18n ? $t(column.i18n) : column.title }}
          </template>
          <template #bodyCell="{ column, text, record, index }">
            <template v-if="column.dataIndex == 'operation'">
              <a-button @click="showRecord(record)">{{ $t('edit') }}</a-button>
            </template>
            <template v-else>
              {{ record[column.dataIndex] }}
            </template>
          </template>
        </a-table>
      </div>


    <!-- Modal Start-->
    <a-modal v-model:open="modal.isOpen" :title="$t(modal.title)" width="60%">
      <a-form
        ref="modalRef"
        :model="modal.data"
        :label-col="{ span: 4 }"
        autocomplete="off"
      >
        <a-form-item :label="$t('email.sender')">
            <a-input v-model:value="modal.data.sender" />
        </a-form-item>
        <a-form-item :label="$t('email.recipient')">
            <a-input v-model:value="modal.data.recipient" />
        </a-form-item>
        <a-form-item :label="$t('email.cc')">
            <a-input v-model:value="modal.data.cc" />
        </a-form-item>
        <a-form-item :label="$t('email.bcc')">
            <a-input v-model:value="modal.data.bcc" />
        </a-form-item>
        <a-form-item :label="$t('email.subject')">
            <a-input v-model:value="modal.data.subject" />
        </a-form-item>
        <a-form-item :label="$t('email.message')">
            <a-textarea v-model:value="modal.data.message" />
        </a-form-item>
      </a-form>
      <template #footer>
        <a-button key="back" @click="modal.isOpen=false">返回</a-button>
      </template>
    </a-modal>
    <!-- Modal End-->
    
  </OrganizationLayout>
</template>

<script>
import OrganizationLayout from "@/Layouts/OrganizationLayout.vue";
import { defineComponent, reactive } from "vue";

export default {
  components: {
    OrganizationLayout,
  },
  props: ["emails"],
  data() {
    return {
      modal: {
        isOpen: false,
        data: {},
        title: "Modal",
        mode: "",
      },
      columns: [
        {
          title: "Sender",
          i18n:"email.sender",
          dataIndex: "sender",
        },
        {
          title: "Recipient",
          i18n:"email.recipient",
          dataIndex: "recipient",
        },
        {
          title: "Subject",
          i18n:"email.subject",
          dataIndex: "subject",
        },
        {
          title: "Operation",
          i18n:"operation",
          dataIndex: "operation",
          key: "operation",
        },
      ],
      rules: {
        name_zh: { required: true },
        mobile: { required: true },
        state: { required: true },
      },
      validateMessages: {
        required: "${label} is required!",
        types: {
          email: "${label} is not a valid email!",
          number: "${label} is not a valid number!",
        },
        number: {
          range: "${label} must be between ${min} and ${max}",
        },
      },
      labelCol: {
        style: {
          width: "150px",
        },
      },
    };
  },
  created() {},
  mounted() {
    
  },
  methods: {
    showRecord(record) {
      this.modal.data = { ...record };
      this.modal.mode = "VIEW";
      this.modal.title = "view";
      this.modal.isOpen = true;
    },

  },
};
</script>
