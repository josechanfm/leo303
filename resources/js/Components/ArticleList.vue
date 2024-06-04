<script setup>
import { UserOutlined } from "@ant-design/icons-vue";

const props = defineProps({
  articles: Object,
});
</script>

<template>
  <div v-for="article in articles" :key="article.id" class="container mx-auto pt-2">
    <div class="bg-white relative shadow rounded-lg md:pl-5">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-[14vw] md:mr-4 shrink-0 flex justify-center">
          <img
            v-if="article.thumbnail"
            :src="article.thumbnail"
            class="object-cover"
            alt="thumbnail"
          />
          <img v-else src="/images/site_logo.png" alt="Thumnail" />
        </div>
        <div class="p-2">
          <a :href="route('article.item', { t: article.uuid })" target="_blank">
            <h2 class="text-xl font-bold">{{ article.title }}</h2>
          </a>
          <div class="flex items-center mt-2">
            <span class="bg-gray-200 text-gray-700 py-1 px-2 rounded-full text-sm" v-if="article.organization_abbr">{{ article.organization_abbr }}</span>
            <span class="bg-gray-200 text-gray-700 py-1 px-2 rounded-full text-sm">{{ article.category_code}}</span>
          </div>
          <div class="mt-2 text-gray-600">
            <div v-if="article.intro" class="text-justify">
              {{ article.intro }}
            </div>
            <div v-else>
              {{ article.content.replace(/<[^>]+>/g, "").substring(0, 100) }} ...
            </div>
            <div v-if="article.url">
              <inertia-link :href="article.url" target="_blank">{{
                $t("url_link")
              }}</inertia-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 
  <a-list item-layout="horizontal" :data-source="articles">
    <template #renderItem="{ item }">
      <a-list-item>
        <a-list-item-meta>
          <template #title>
            <inertia-link :href="route('article.item', { t: item.uuid })">
              {{ item.title }}
            </inertia-link>
          </template>
          <template #description>
            <div v-if="item.intro">
              {{ item.intro_en }}
            </div>
            <div v-else>
              {{ item.content.replace(/<[^>]+>/g, '').substring(0, 100) }} ...
            </div>
            <a :href="item.url">{{ item.url }}</a>
          </template>
          <template #avatar>
            <a-avatar style="color: #f56a00; background-color: #fde3cf">
              <template v-if="item.author" #icon>
                {{ item.author.charAt(0).toUpperCase() }}
              </template>
              <template v-else #icon>
                <UserOutlined />
              </template>
            </a-avatar>
          </template>
        </a-list-item-meta>
      </a-list-item>
    </template>
  </a-list>
--></template>
