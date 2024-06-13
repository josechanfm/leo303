<template>
  <MemberLayout title="留言板">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ blog.title }}
      </h2>
    </template>

    <div class="container mx-auto min-h-[800px] py-6">
      <div class="flex justify-end pt-2 pb-4">
        <a-button type="primary" shape="round" @click="replyContent(content.id)"
          >回覆</a-button
        >
      </div>
      <div class="flex flex-col gap-2">
        <a-card :title="content.title" :bordered="false">
          <div class="flex flex-col gap-1">
            <div>{{ content.user.name }}:</div>
            <div>
              {{ content.content }}
            </div>
          </div>
        </a-card>
        <div class="" v-for="c in content.reply_contents" :key="c.id">
          <a-card>
            <div class="flex flex-col gap-1">
              <div>{{ c.user.name }}:</div>
              <div>
                {{ c.content }}
              </div>
            </div>
            <div class="text-right">
              <a-button type="link" @click="replyContent(c.id)">回覆</a-button>
            </div>
            <a-card v-if="c.reply_contents.length != 0">
              <div v-for="rc in c.reply_contents" :key="rc.id" class="border-b-2 mb-4">
                {{ rc.user.name }}:{{ rc.content }}
              </div>
            </a-card>
          </a-card>
        </div>
      </div>
      <div
        class="border bg-white shadow-md rounded-md p-4 my-4"
        v-if="replyContentVisable == true"
      >
        <div class="">
          <a-form
            ref="modalRef"
            :model="reply_blog_content"
            name="blog_content"
            :rules="rules"
            :validate-messages="validateMessages"
          >
            <a-form-item :label="$t('content')" name="content">
              <a-textarea v-model:value="reply_blog_content.content"></a-textarea>
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
  props: ["blog", "content"],
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
      replyContentVisable: false,
      reply_blog_content: {},
      rules: {
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
      console.log(this.reply_blog_content);
      this.$refs.modalRef
        .validateFields()
        .then(() => {
          this.$inertia.post(
            route("member.blog.content.reply", this.blog.id),
            this.reply_blog_content,
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
      this.replyContentVisable = false;
      this.reply_blog_content = {};
    },
    replyContent(reply_id) {
      this.replyContentVisable = true;
      this.reply_blog_content.reply_id = reply_id;
    },
  },
};
</script>
