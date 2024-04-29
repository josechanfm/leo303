<script setup>
import { UserOutlined } from '@ant-design/icons-vue';

const props = defineProps({
  articles: Object
});
</script>

<template>

  <div v-for="article in articles" class="container mx-auto pt-5">
    <div class="bg-white relative shadow rounded-lg pl-5">
      <div class="flex items-center">
        <img v-if="article.thumbmail" :src="article.thumbmail" alt="Thumbnail" class="w-30 h-30 mr-4">
        <img src="/images/site_logo.png" alt="Thumnail" class="w-30 h-30 mr-4"/>
          
        <div>
          <inertia-link :href="route('article.item', { t: article.uuid })">
            <h2 class="text-xl font-bold">{{ article.title }}</h2>
          </inertia-link>
          <div class="flex items-center mt-2">
            <span class="bg-gray-200 text-gray-700 py-1 px-2 rounded-full text-sm">{{ article.category_code }}</span>
          </div>
          <p class="mt-2 text-gray-600">
            <div v-if="article.intro">
              {{ article.intro_en }}
            </div>
            <div v-else>
              {{ article.content.replace(/<[^>]+>/g, '').substring(0, 100) }} ...
            </div>
            <a :href="article.url">{{ $t('url_link') }}</a>
          </p>
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
-->

</template>
