<template>
    <MemberLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                超融社 Converge Net
            </h2>
        </template>
        <div class="container mx-auto pt-5">
            <div class="bg-white relative shadow rounded-lg overflow-x-auto p-5">
                {{ articles }}
            </div>
        </div>


        




    </MemberLayout>

</template>

<script>
import MemberLayout from '@/Layouts/MemberLayout.vue';
import { NotificationTwoTone } from '@ant-design/icons-vue';
import { defineComponent, reactive } from 'vue';

export default {
    components: {
        MemberLayout,
    },
    props: ['articles'],
    data() {
        return {
        }
    },
    created() {
    },
    mounted() {
    },
    methods: {
    },
}
</script>