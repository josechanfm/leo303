<template>

    <div class="font-sans text-gray-900 antialiased">
        <div class="container mx-auto">
            <div class="flex justify-between gap-6">
                <a-button type="primary" @click="onCreated()">{{ $t("create") }}</a-button>
            </div>
        </div>
        <div class="container mx-auto pt-5">
            <div class="bg-white relative shadow rounded-lg overflow-x-auto">
                <a-table :dataSource="polls" :columns="columns">
                    <template #headerCell="{ column }">
                        {{ column.i18n ? $t(column.i18n) : column.title }}
                    </template>
                    <template #bodyCell="{ column, text, record, index }">
                        <template v-if="column.dataIndex == 'operation'">
                            <a-button>Edit</a-button>
                        </template>
                        <template v-else>
                            text
                        </template>
                    </template>
                </a-table>
            </div>
        </div>
    </div>

        <!-- Modal Start-->
        <a-modal v-model:open="modal.isOpen" :title="modal.title" width="60%">
            <a-form ref="modalRef" :model="modal.data" name="Teacher" :label-col="{ span: 8 }"
                :wrapper-col="{ span: 16 }" autocomplete="off" :rules="rules" :validate-messages="validateMessages">
                <a-form-item label="Question" name="question">
                    <a-input v-model:value="modal.data.question" />
                </a-form-item>
                <a-form-item label="Option A" name="option_a">
                    <a-input v-model:value="modal.data.option_a" />
                </a-form-item>
                <a-form-item label="Option B" name="option_b">
                    <a-input v-model:value="modal.data.option_b" />
                </a-form-item>
                <a-form-item label="Option C" name="option_c">
                    <a-input v-model:value="modal.data.option_c" />
                </a-form-item>
                <a-form-item label="Option D" name="option_d">
                    <a-input v-model:value="modal.data.option_d" />
                </a-form-item>
                <a-form-item label="Answer" name="answer">
                    <a-input v-model:value="modal.data.answer" />
                </a-form-item>
            </a-form>
            <template #footer>
                <a-button v-if="modal.mode == 'EDIT'" key="Update" type="primary"
                    @click="updateRecord()">{{ $t('update') }}</a-button>
                <a-button v-if="modal.mode == 'CREATE'" key="Store" type="primary"
                    @click="storeRecord()">{{ $t('add') }}</a-button>
            </template>
        </a-modal>
        <!-- Modal End-->
</template>


<script>
import WebLayout from '@/Layouts/WebLayout.vue';

export default {
    components: {
        WebLayout,
    },
    props: ['polls', 'configs'],
    data() {
        return {
            modal: {
                isOpen: false,
                data: {},
                title: "Modal",
                mode: ""
            },
            columns: [
                {
                    title: "Question",
                    i18n: "question",
                    dataIndex: "question",
                }, {
                    title: "Operation",
                    i18n: "operation",
                    dataIndex: "operation",
                },
            ],
            rules: {
                question: { required: true },
                option_a: { required: true },
                option_b: { required: true },
                answer: { required: true },
            },

        }
    },
    created() {
    },
    methods: {
        onCreated() {
            this.modal.data = {};
            this.modal.mode = "CREATE";
            this.modal.title = "Create";
            this.modal.isOpen = true;
        },
        storeRecord(){
            console.log('store')
        },
        updateRecord(){
            console.log('update')
        }
    }
}

</script>