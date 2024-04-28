<template>
    <OrganizationLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Club Managemnet
            </h2>
        </template>
            <a-table :dataSource="organizations" :columns="columns">
                <template #bodyCell="{column, text, record, index}">
                    <template v-if="column.dataIndex=='operation'">
                        <inertia-link :href="route('manage.organizations.edit',record.id)" class="ant-btn">{{$t('edit')}}</inertia-link>
                        <!-- <inertia-link :href="route('organization.members.index',record.id)" class="ant-btn">Members</inertia-link>
                        <inertia-link :href="route('organization.forms.index',record.id)" class="ant-btn">Forms</inertia-link> -->
                    </template>
                    <template v-else-if="column.dataIndex=='state'">
                        {{teacherStateLabels[text]}}
                    </template>
                    <template v-else>
                        {{record[column.dataIndex]}}
                    </template>
                </template>
            </a-table>
    </OrganizationLayout>

</template>

<script>
import OrganizationLayout from '@/Layouts/OrganizationLayout.vue';
import { defineComponent, reactive } from 'vue';

export default {
    components: {
        OrganizationLayout,
    },
    props: ['organizations'],
    data() {
        return {
            modal:{
                isOpen:false,
                data:{},
                title:"Modal",
                mode:""
            },
            teacherStateLabels:{},
            columns:[
                {
                    title: 'Abbr.',
                    dataIndex: 'abbr',
                },{
                    title: 'Full Name',
                    dataIndex: 'full_name',
                },{
                    title: 'Country',
                    dataIndex: 'country',
                },{
                    title: 'Phone',
                    dataIndex: 'phone',
                },{
                    title: 'Email',
                    dataIndex: 'email',
                },{
                    title: 'Action',
                    dataIndex: 'operation',
                    key: 'operation',
                },
            ],
            rules:{
                name_zh:{required:true},
                mobile:{required:true},
                state:{required:true},
            },
            validateMessages:{
                required: '${label} is required!',
                types: {
                    email: '${label} is not a valid email!',
                    number: '${label} is not a valid number!',
                },
                number: {
                    range: '${label} must be between ${min} and ${max}',
                },
            },
            labelCol: {
                style: {
                width: '150px',
                },
            },
        }
    },
    created(){
    },
    methods: {
        deleteRecord(recordId){
            console.log(recordId);
            if (!confirm('Are you sure want to remove?')) return;
            this.$inertia.delete('/admin/teachers/' + recordId,{
                onSuccess: (page)=>{
                    console.log(page);
                },
                onError: (error)=>{
                    console.log(error);
                }
            });
        },
        createLogin(recordId){
            console.log('create login'+recordId);

        }
    },
}
</script>