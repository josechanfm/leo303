<script setup>
import WebLayout from "@/Layouts/WebLayout.vue";
import ArticleList from "@/Components/ArticleList.vue";
import { default as Carousel } from "@/Components/Carousel01.vue";

defineProps({
  organization: Object,
  articles: Array,
});
</script>

<template>
  <WebLayout title="Dashboard" :organization="organization">
    <Carousel />
    <div class="flex flex-col">
      <div class="container md:mx-auto flex flex-col md:flex-row py-4 mx-2 gap-3">
        <div class="flex flex-col md:w-1/2">
          <div class="underline text-3xl py-4">本會簡介</div>
          <div class="">本會為.......</div>
        </div>
      </div>
      <div class="flex flex-col bg-gray-300 pb-12">
        <div class="md:container md:mx-auto flex flex-col py-4 mx-2 gap-3">
          <div class="underline text-3xl py-4">會員資料</div>
          <div class="grid xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-24 gap-y-12">
            <div
              class="relative flex flex-col rounded-md bg-white p-2 items-center shadow-md"
            >
              <div class="absolute top-[-25px]">
                <svg
                  viewBox="0 0 512 1024"
                  width="512"
                  height="512"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:svg="http://www.w3.org/2000/svg"
                  version="1.1"
                  xml:space="preserve"
                >
                  <g class="layer">
                    <title>Layer 1</title>
                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <g id="SVGRepo_iconCarrier">
                      <g id="svg_1">
                        <g id="svg_2">
                          <g id="svg_3">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_4"
                              points="159.0709991455078,36.76264572143555 159.0709991455078,107.66399383544922 0,107.66399383544922 4.447999954223633,104.72312927246094 54.30699920654297,72.23130798339844 0,36.76264572143555 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_5"
                              points="89.21299743652344,79.73516845703125 159.05099487304688,79.73516845703125 159.05099487304688,107.12255096435547 "
                            />
                          </g>
                          <g id="svg_6">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_7"
                              points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_8"
                              points="422.7869873046875,79.73516845703125 352.9490051269531,79.73516845703125 352.9490051269531,107.12255096435547 "
                            />
                          </g>
                          <rect
                            fill="#5272bc"
                            height="78.91"
                            id="svg_9"
                            width="332.61"
                            x="89.69"
                            y="1"
                          />
                        </g>
                        <polygon
                          fill="#040000"
                          id="svg_10"
                          opacity="0.06"
                          points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,79.91344451904297 209.79299926757812,79.91344451904297 352.3320007324219,1 422.3070068359375,1 422.3070068359375,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                        />
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="my-2 mt-4"><img :src="'/logos/' + organization.logo" /></div>
              <div class="text-xl font-bold">會長</div>
              <div class="text-xl font-bold">XXX</div>
            </div>
            <div
              class="relative flex flex-col rounded-md bg-white p-2 items-center shadow-md"
            >
              <div class="absolute top-[-25px]">
                <svg
                  class="w-[512px] h-[512px]"
                  viewBox="0 0 512 1024"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:svg="http://www.w3.org/2000/svg"
                  version="1.1"
                  xml:space="preserve"
                >
                  <g class="layer">
                    <title>Layer 1</title>
                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <g id="SVGRepo_iconCarrier">
                      <g id="svg_1">
                        <g id="svg_2">
                          <g id="svg_3">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_4"
                              points="159.0709991455078,36.76264572143555 159.0709991455078,107.66399383544922 0,107.66399383544922 4.447999954223633,104.72312927246094 54.30699920654297,72.23130798339844 0,36.76264572143555 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_5"
                              points="89.21299743652344,79.73516845703125 159.05099487304688,79.73516845703125 159.05099487304688,107.12255096435547 "
                            />
                          </g>
                          <g id="svg_6">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_7"
                              points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_8"
                              points="422.7869873046875,79.73516845703125 352.9490051269531,79.73516845703125 352.9490051269531,107.12255096435547 "
                            />
                          </g>
                          <rect
                            fill="#5272bc"
                            height="78.91"
                            id="svg_9"
                            width="332.61"
                            x="89.69"
                            y="1"
                          />
                        </g>
                        <polygon
                          fill="#040000"
                          id="svg_10"
                          opacity="0.06"
                          points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,79.91344451904297 209.79299926757812,79.91344451904297 352.3320007324219,1 422.3070068359375,1 422.3070068359375,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                        />
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="my-2 mt-4"><img :src="'/logos/' + organization.logo" /></div>
              <div class="text-xl font-bold">上屆會長</div>
              <div class="text-xl font-bold">XXX</div>
            </div>
            <div
              class="relative flex flex-col rounded-md bg-white p-2 items-center shadow-md"
            >
              <div class="absolute top-[-25px]">
                <svg
                  class="w-[512px] h-[512px]"
                  viewBox="0 0 512 1024"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:svg="http://www.w3.org/2000/svg"
                  version="1.1"
                  xml:space="preserve"
                >
                  <g class="layer">
                    <title>Layer 1</title>
                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <g id="SVGRepo_iconCarrier">
                      <g id="svg_1">
                        <g id="svg_2">
                          <g id="svg_3">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_4"
                              points="159.0709991455078,36.76264572143555 159.0709991455078,107.66399383544922 0,107.66399383544922 4.447999954223633,104.72312927246094 54.30699920654297,72.23130798339844 0,36.76264572143555 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_5"
                              points="89.21299743652344,79.73516845703125 159.05099487304688,79.73516845703125 159.05099487304688,107.12255096435547 "
                            />
                          </g>
                          <g id="svg_6">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_7"
                              points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_8"
                              points="422.7869873046875,79.73516845703125 352.9490051269531,79.73516845703125 352.9490051269531,107.12255096435547 "
                            />
                          </g>
                          <rect
                            fill="#5272bc"
                            height="78.91"
                            id="svg_9"
                            width="332.61"
                            x="89.69"
                            y="1"
                          />
                        </g>
                        <polygon
                          fill="#040000"
                          id="svg_10"
                          opacity="0.06"
                          points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,79.91344451904297 209.79299926757812,79.91344451904297 352.3320007324219,1 422.3070068359375,1 422.3070068359375,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                        />
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="my-2 mt-4"><img :src="'/logos/' + organization.logo" /></div>
              <div class="text-xl font-bold">第一副會長</div>
              <div class="text-xl font-bold">XXX</div>
            </div>
            <div
              class="relative flex flex-col rounded-md bg-white p-2 items-center shadow-md"
            >
              <div class="absolute top-[-25px]">
                <svg
                  class="w-[512px] h-[512px]"
                  viewBox="0 0 512 1024"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:svg="http://www.w3.org/2000/svg"
                  version="1.1"
                  xml:space="preserve"
                >
                  <g class="layer">
                    <title>Layer 1</title>
                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <g id="SVGRepo_iconCarrier">
                      <g id="svg_1">
                        <g id="svg_2">
                          <g id="svg_3">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_4"
                              points="159.0709991455078,36.76264572143555 159.0709991455078,107.66399383544922 0,107.66399383544922 4.447999954223633,104.72312927246094 54.30699920654297,72.23130798339844 0,36.76264572143555 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_5"
                              points="89.21299743652344,79.73516845703125 159.05099487304688,79.73516845703125 159.05099487304688,107.12255096435547 "
                            />
                          </g>
                          <g id="svg_6">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_7"
                              points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_8"
                              points="422.7869873046875,79.73516845703125 352.9490051269531,79.73516845703125 352.9490051269531,107.12255096435547 "
                            />
                          </g>
                          <rect
                            fill="#5272bc"
                            height="78.91"
                            id="svg_9"
                            width="332.61"
                            x="89.69"
                            y="1"
                          />
                        </g>
                        <polygon
                          fill="#040000"
                          id="svg_10"
                          opacity="0.06"
                          points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,79.91344451904297 209.79299926757812,79.91344451904297 352.3320007324219,1 422.3070068359375,1 422.3070068359375,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                        />
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="my-2 mt-4"><img :src="'/logos/' + organization.logo" /></div>
              <div class="text-xl font-bold">第二副會長</div>
              <div class="text-xl font-bold">XXX</div>
            </div>
            <div
              class="relative flex flex-col rounded-md bg-white p-2 items-center shadow-md"
            >
              <div class="absolute top-[-25px]">
                <svg
                  class="w-[512px] h-[512px]"
                  viewBox="0 0 512 1024"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:svg="http://www.w3.org/2000/svg"
                  version="1.1"
                  xml:space="preserve"
                >
                  <g class="layer">
                    <title>Layer 1</title>
                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <g id="SVGRepo_iconCarrier">
                      <g id="svg_1">
                        <g id="svg_2">
                          <g id="svg_3">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_4"
                              points="159.0709991455078,36.76264572143555 159.0709991455078,107.66399383544922 0,107.66399383544922 4.447999954223633,104.72312927246094 54.30699920654297,72.23130798339844 0,36.76264572143555 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_5"
                              points="89.21299743652344,79.73516845703125 159.05099487304688,79.73516845703125 159.05099487304688,107.12255096435547 "
                            />
                          </g>
                          <g id="svg_6">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_7"
                              points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_8"
                              points="422.7869873046875,79.73516845703125 352.9490051269531,79.73516845703125 352.9490051269531,107.12255096435547 "
                            />
                          </g>
                          <rect
                            fill="#5272bc"
                            height="78.91"
                            id="svg_9"
                            width="332.61"
                            x="89.69"
                            y="1"
                          />
                        </g>
                        <polygon
                          fill="#040000"
                          id="svg_10"
                          opacity="0.06"
                          points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,79.91344451904297 209.79299926757812,79.91344451904297 352.3320007324219,1 422.3070068359375,1 422.3070068359375,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                        />
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="my-2 mt-4"><img :src="'/logos/' + organization.logo" /></div>
              <div class="text-xl font-bold">第三副會長</div>
              <div class="text-xl font-bold">XXX</div>
            </div>
            <div
              class="relative flex flex-col rounded-md bg-white p-2 items-center shadow-md"
            >
              <div class="absolute top-[-25px]">
                <svg
                  class="w-[512px] h-[512px]"
                  viewBox="0 0 512 1024"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:svg="http://www.w3.org/2000/svg"
                  version="1.1"
                  xml:space="preserve"
                >
                  <g class="layer">
                    <title>Layer 1</title>
                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <g id="SVGRepo_iconCarrier">
                      <g id="svg_1">
                        <g id="svg_2">
                          <g id="svg_3">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_4"
                              points="159.0709991455078,36.76264572143555 159.0709991455078,107.66399383544922 0,107.66399383544922 4.447999954223633,104.72312927246094 54.30699920654297,72.23130798339844 0,36.76264572143555 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_5"
                              points="89.21299743652344,79.73516845703125 159.05099487304688,79.73516845703125 159.05099487304688,107.12255096435547 "
                            />
                          </g>
                          <g id="svg_6">
                            <polygon
                              fill="#3d6ab3"
                              id="svg_7"
                              points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                            />
                            <polygon
                              fill="#2e538e"
                              id="svg_8"
                              points="422.7869873046875,79.73516845703125 352.9490051269531,79.73516845703125 352.9490051269531,107.12255096435547 "
                            />
                          </g>
                          <rect
                            fill="#5272bc"
                            height="78.91"
                            id="svg_9"
                            width="332.61"
                            x="89.69"
                            y="1"
                          />
                        </g>
                        <polygon
                          fill="#040000"
                          id="svg_10"
                          opacity="0.06"
                          points="457.6929931640625,72.23130798339844 512,107.66399383544922 352.92999267578125,107.66399383544922 352.92999267578125,79.91344451904297 209.79299926757812,79.91344451904297 352.3320007324219,1 422.3070068359375,1 422.3070068359375,36.76264572143555 512,36.76264572143555 507.2200012207031,39.88676071166992 "
                        />
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="my-2 mt-4"><img :src="'/logos/' + organization.logo" /></div>
              <div class="text-xl font-bold">義務秘書</div>
              <div class="text-xl font-bold">XXX</div>
            </div>
          </div>
        </div>
      </div>
      <div class="container md:mx-auto flex flex-col md:flex-row py-4 mx-2 gap-3">
        <div class="flex flex-col md:w-1/2">
          <div class="underline text-3xl py-4">最新消息</div>
          <ArticleList :articles="articles" />
        </div>
      </div>
      <div class="bg-sky-600 text-white py-2">
        <div class="md:container md:mx-auto flex flex-col md:flex-row gap-3">
          <div class="flex flex-col gap-2 md:w-1/2 mx-2 md:mx-0">
            <div class="underline text-3xl py-4">聯絡我們</div>
            <div class="">聯絡電話:95846341</div>
            <div class="">電郵地址:leo303@info.org</div>
            <div class="">本會地址:香港天水圍XXX地下一層</div>
          </div>
          <div class="md:w-1/2 mb-2">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14748.868120373714!2d113.99296346423239!3d22.458477203520644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403f08807915f99%3A0xd64729f174fcb284!2z6aaZ5riv5aSp5rC05ZyN!5e0!3m2!1szh-TW!2smo!4v1722595118184!5m2!1szh-TW!2smo"
              class="w-full h-80"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </WebLayout>
</template>
