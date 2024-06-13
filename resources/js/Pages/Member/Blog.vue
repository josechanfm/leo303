<template>
  <MemberLayout title="留言板">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ blog.title }}
      </h2>
    </template>

    <div class="container mx-auto min-h-[800px] max-w-[1 300px]">
      <div class="flex justify-end py-2">
        <a-button type="primary" shape="round" @click="createBlogContent = true"
          >發佈留言</a-button
        >
      </div>
      <div class="flex flex-col gap-3">
        <div class="" v-for="bc in blog_contents" :key="bc.id">
          <a :href="route('member.blog.contents.show', { blog: blog, content: bc })">
            <a-card hoverable>
              <a-card-meta :title="bc.title">
                <template #description>{{ bc.content }}</template>
              </a-card-meta>
            </a-card>
          </a>
        </div>
      </div>
      <div
        class="border bg-white shadow-md rounded-md p-4 my-4"
        v-if="createBlogContent == true"
      >
        <div class="">
          <a-form
            ref="modalRef"
            :model="new_blog_content"
            name="blog_content"
            :rules="rules"
            :validate-messages="validateMessages"
          >
            <a-form-item :label="$t('title')" name="title">
              <a-input v-model:value="new_blog_content.title"></a-input>
            </a-form-item>
            <a-form-item :label="$t('content')" name="content">
              <a-textarea v-model:value="new_blog_content.content"></a-textarea>
            </a-form-item>
          </a-form>
          <div class="flex justify-end gap-4">
            <a-button @click="cancelBlogContent">{{ $t("cancel") }}</a-button>
            <a-button type="primary" @click="createContent">{{ $t("confirm") }}</a-button>
          </div>
        </div>
      </div>
    </div>
  </MemberLayout>
</template>
<script>
import MemberLayout from "@/Layouts/MemberLayout.vue";
import { router } from "@inertiajs/vue3";
import { onBeforeUnmount, ref, shallowRef, onMounted } from "vue";
export default {
  components: { MemberLayout },
  props: ["blog", "blog_contents"],
  setup() {
    const editorRef = shallowRef();
    const valueHtml = ref("<p>hello</p>");
    onMounted(() => {
      setTimeout(() => {
        valueHtml.value = "<p></p>";
      }, 1500);
    });
    const toolbarConfig = {};
    const editorConfig = { placeholder: "请输入内容...", MENU_CONF: {} };

    // 组件销毁时，也及时销毁编辑器
    onBeforeUnmount(() => {
      const editor = editorRef.value;
      if (editor == null) return;
      editor.destroy();
    });
    editorConfig.MENU_CONF["uploadImage"] = {
      async customUpload(file, insertFn) {
        const formData = new FormData();
        formData.append("file", file);
        console.log(file);
        window.axios
          .post(route("member.blog.media-upload"), formData, {
            headers: {
              "Content-Type": "multipart/form-data",
            },
          })
          .then((res) => {
            insertFn(res.data.path);
          });
      },
      // other config...
    };
    const handleCreated = (editor) => {
      editorRef.value = editor; // 记录 editor 实例，重要！
    };

    return {
      editorRef,
      valueHtml,
      mode: "default", // 或 'simple'
      toolbarConfig,
      editorConfig,
      handleCreated,
    };
  },
  created() {},
  data() {
    return {
      newBlog: "",
      createBlogContent: false,
      new_blog_content: {},
      rules: {
        title: { required: true },
        content: { required: true },
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
    };
  },
  methods: {
    createContent() {
      console.log(this.new_blog_content);
      this.$refs.modalRef
        .validateFields()
        .then(() => {
          this.$inertia.post(
            route("member.blog.contents.store", this.blog.id),
            this.new_blog_content,
            {
              onSuccess: (page) => {
                console.log(page);
                this.cancelBlogContent();
              },
              onError: (error) => {
                console.log(error);
              },
            }
          );
        })
        .catch((err) => {
          console.log("error", err);
        });
    },
    cancelBlogContent() {
      this.createBlogContent = false;
      this.new_blog_content = {};
    },
  },
};
</script>
