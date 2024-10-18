<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import ArticleList from "@/Components/ArticleList.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { UserOutlined } from "@ant-design/icons-vue";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
  isMember: Boolean,
  isOrganizer: Boolean,
  articles: Array,
  welcomeMessage: Object,
});
</script>

<template>
  <DefaultLayout title="Dashboard">
    <div
      class="lg:h-96 bg-gradient-to-tr from-blue-800 to-blue-600 rounded-lg shadow-lg flex items-center"
    >
      <div class="ml-5 lg:ml-20 lg:w-4/5 py-5">
        <h2 class="text-white text-4xl font-extrabold" v-if="welcomeMessage">
          {{ welcomeMessage.title }}
        </h2>
        <h2 class="text-white text-4xl font-extrabold" v-else>
          {{ $t("introduction") }}
        </h2>
        <p
          class="lg:text-lg text-indigo-100 mr-4 font-light tracking-wide leading-7 text-justify mt-4"
        >
          <template v-if="welcomeMessage">
            {{ welcomeMessage.intro }}
            <template v-if="welcomeMessage.url">
              <a-button
                :href="welcomeMessage.url"
                class="mt-4 bg-white text-blue-600 hover:bg-blue-100"
                >{{ $t("readmore") }}</a-button
              >
            </template>
            <template v-else-if="welcomeMessage.content">
              <a-button
                :href="route('article.item', { t: welcomeMessage.uuid })"
                class="mt-4 bg-white text-blue-600 hover:bg-blue-100"
                >{{ $t("readmore") }}</a-button
              >
            </template>
          </template>
          <template v-else>
            <p>
              香港首個獅子會始創於1955年，其後多個獅子會相繼成立後，國際獅子總會於1960年，批准成立為『國際獅子總會中國港澳三O三區』。
            </p>
            <p>
              港澳獅子總會成立目的是鼓勵人們竭誠為社會服務，不論個人酬報或利益，服務人群，同情貧苦和濟弱扶危。在過往60多年以來，經過獅子會會員不斷的努力﹐獅子運動在港澳兩地是蓬勃發展並獲得廣大人士認同。
            </p>
            <p>
              青年獅子區會於1979年6月17日正式成立，青獅 "LEO" 英文原義是：Leadership,
              Experience & Opportunity
              也就是「發揮領導才能，透過社會服務吸取經驗及爭取機會以達成國際理解」的意義。青年獅子會是經由本區個別獅子會贊助成立的。
            </p>
          </template>
        </p>
      </div>
    </div>

    <div class="px-4 py-2 mt-4 bg-white rounded-lg shadow-md">
      <h2 class="font-bold text-2xl text-gray-800">最新消息</h2>
    </div>
    <ArticleList :articles="articles" />
  </DefaultLayout>
</template>
