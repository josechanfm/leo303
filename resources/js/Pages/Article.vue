<script>
import MemberLayout from '@/Layouts/MemberLayout.vue';
import CertificateCard from '@/Pages/CertificateCard.vue';

export default {
    components: {
        MemberLayout,
        CertificateCard
    },
    props:['article'],
    data() {
        return{
        }
    }
}

</script>

<template>
    <MemberLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                News & Events
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 px-2 sm:px-6 lg:px-8">
            <h2 class="font-bold text-2xl text-gray-800">
                {{ article.title}}</h2>
            <div v-html="article.content"/>
            <div class="text-center pt-10">
            <inertia-link :href="article.url">Link</inertia-link>
            </div>
        </div>
        
    </MemberLayout>

    
</template>

<style >
.ql-align-right {
	text-align: right;
}
.ql-align-center {
	text-align: center;
}
.ql-align-left {
	text-align: left;
}
</style>