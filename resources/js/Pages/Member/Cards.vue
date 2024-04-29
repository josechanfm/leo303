<template>
    <MemberLayout title="My Cards">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                我的會員卡
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <MembershipCard v-for="org in member.organizations" title="Professional Certificate" :organization="org">
                        <template #description>
                            <div v-html="org.description"></div>
                        </template>
                    </MembershipCard>
                </div>
            </div>
        </div>
    </MemberLayout>
</template>


<script>
import MemberLayout from '@/Layouts/MemberLayout.vue';
import MembershipCard from '@/Components/Member/MembershipCard.vue';

export default {
    components: {
        MemberLayout,
        MembershipCard,
    },
    props: ['member'],
    data() {
        return {
        }
    },
    created() {
    },
    methods: {

    },
}
</script>