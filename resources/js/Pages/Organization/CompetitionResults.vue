<template>
  <OrganizationLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $t("application_result") }}
      </h2>
    </template>
    <a-row>
      <a-col :span="12">
        <a-card>
          <table>
            <tr v-for="cw in competition.categories_weights">
              <td width="100px">{{cw.name}}</td>
              <td width="100px">
                <ol>
                  <li v-for="w in cw.female">
                    <input type="radio" v-model="selectedCategoryWeight" @change="onChangeCW" :value="cw.code +'|F|'+ w.code"/>&nbsp;{{ w.name }}
                  </li>
                </ol>
              </td>
              <td width="100px">
                <ol>
                  <li v-for="w in cw.male">
                    <input type="radio" v-model="selectedCategoryWeight" @change="onChangeCW" :value="cw.code +'|M|'+ w.code"/>&nbsp;{{ w.name }}
                  </li>
                </ol>
              </td>
            </tr>
          </table>
        </a-card>
      </a-col>
      <a-col :span="12">
        <a-card :title="competition.title_zh">
          <template #extra><a :href="route('manage.competition.applications.index',competition.id)">Applications</a></template>
            <template v-for="result in competitionResults">
            <a-row class="pb-5">
              <a-col :span="6">{{ result.label }}</a-col>
              <a-col :span="18">
                <template v-if="result.value=='advance' || result.value=='participate'">
                  <a-select 
                      v-model:value="result.application_id" 
                      mode="multiple"
                      :options="athletes"
                      :fieldNames="{value:'id',label:'display_name'}"
                      :allowClear="true"
                      style="width: 300px"
                      @change="onChangeResult(result)"
                  />
                </template>
                <template v-else>
                  <a-select 
                      v-model:value="result.application_id" 
                      :options="athletes"
                      :fieldNames="{value:'id',label:'display_name'}"
                      :allowClear="true"
                      style="width: 300px"
                      @change="onChangeResult(result)"
                  />
                </template>
              </a-col>
            </a-row>
          </template>
          <a-button @click="submitResult">Submit</a-button>
        </a-card>
      </a-col>
    </a-row>


  </OrganizationLayout>
</template>

<script>
import OrganizationLayout from "@/Layouts/OrganizationLayout.vue";
import { defineComponent, reactive } from "vue";
import dayjs from "dayjs";
import { Modal } from 'ant-design-vue';
import { ref, createVNode } from 'vue';
import { ExclamationCircleOutlined } from '@ant-design/icons-vue';

export default {
  components: {
    OrganizationLayout,Modal,createVNode,ExclamationCircleOutlined
  },
  props: ["competitionResults","competition"],
  data() {
    return {
      dateFormat: "YYYY-MM-DD",
      selectedCategoryWeight:null,
      athletes:[],
    };
  },
  created() {
    this.resetParams()
  },
  mounted(){
  },
  methods: {
    resetParams(){
      this.selectedCategoryWeight=null
      this.competitionResults.forEach(r=>{
        if(r.value=='advance' || r.value=='participate'){
          r.application_id=[]
        }else{
          r.application_id=null
        }
      })
    },
    onChangeCW(){
      const cw=this.selectedCategoryWeight.split('|');
      this.athletes=this.competition.applications.filter(a=>
        a.category==cw[0] && a.gender==cw[1] && a.weight==cw[2]
      );
      this.athletes.forEach(a=>{
        this.competitionResults.forEach(r=>{

          if(r.value=='advance' || r.value=='participate'){
            if(r.value==a.result_rank){
              r.application_id.push(a.id)
              a.disabled=true
            }
          }else{
            if(r.value==a.result_rank){
              r.application_id=a.id
              a.disabled=true
            }
          }
        })
      })
    },
    onChangeResult(result){
      this.athletes.forEach(a=>{
        a.disabled=false;
      })
      this.competitionResults.forEach(r=>{
        if(Array.isArray(r.application_id)){
          r.application_id.forEach(id=>{
            this.athletes.find(a=>a.id==id).disabled=true;
          })
        }else{
          if(r.application_id){
            this.athletes.find(a=>a.id==r.application_id).disabled=true;
          }
        }
      })
    },
    submitResult(){
      console.log(this.competitionResults)
      this.$inertia.post(
        route("manage.competition.results.store", {competition:this.competition}),this.competitionResults,{
          onSuccess: (page) => {
            console.log(page);
            this.resetParams()
            this.athletes=[]
          },
          onError: (error) => {
            console.log(error);
          },
        }
      );

    }
  },
};
</script>
