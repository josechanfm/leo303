<template>
  <div class="text-right p-3 px-6" v-if="data.total > 0">
    <a-pagination
      show-size-changer
      @change="onPageChange"
      v-model:current="data.current_page"
      :total="data.total"
      v-model:page-size="data.per_page"
    />
  </div>
</template>

<script>
export default {
  setup() {},
  props: {
    data: {
      required: true,
      type: Object,
    },
    search: {
      required: true,
      type: Object,
    },
  },
  mounted() {},
  methods: {
    onPageChange(page, pageSize) {
      this.$inertia.get(route(route().current()), {
        search: this.search,
        pagination: {
          currentPage: page,
          pageSize: pageSize,
        },
      });
    },
  },
};
</script>
