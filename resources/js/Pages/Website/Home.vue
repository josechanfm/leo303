<script setup>
import WebLayout from '@/Layouts/WebLayout.vue';
import ArticleList from "@/Components/ArticleList.vue";
import { Head, Link } from '@inertiajs/inertia-vue3';
import { UserOutlined } from '@ant-design/icons-vue';

defineProps({
  organization:Object,
  articles: Array,
});
</script>

<template>
  <WebLayout title="Dashboard" :organization="organization">
    <div class="lg:h-96 bg-gradient-to-tr bg-[#0081C8] rounded-md flex items-center">
      <div class="ml-5 lg:ml-20 lg:w-4/5 py-5">
      {{organization}}
        <!-- <a href="#"
          class="uppercase inline-block mt-8 text-sm bg-white py-2 px-4 rounded font-semibold hover:bg-indigo-100"> Learn More
        </a> -->
      </div>
    </div>

    <div class="px-4 py-2 mt-2 bg-white rounded-md">
      <h2 class="font-bold text-2xl text-gray-800">最新消息</h2>
    </div>
      <ArticleList :articles="articles"/>
    

  </WebLayout>
</template>
