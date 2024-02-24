<template>
    <MemberLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <p>Hello</p>
            {{ questions }}
            <div class="flex flex-col">
                <div v-for="(question, index) in questions" :key="index" class="mb-4">
                    <h3 class="text-lg font-medium">{{ question.title }}</h3>
                    <a-radio-group v-model:value="question.answer">
                        <template v-for="(option, optionIndex) in question.options">
                            <a-radio :style="virticalStyle" :value="option.value">{{ option.label }}</a-radio>
                        </template>
                    </a-radio-group>
                </div>
            </div>            
        </div>
    </MemberLayout>

    
</template>

<script>
import MemberLayout from '@/Layouts/MemberLayout.vue';

export default {
    components: {
        MemberLayout,
    },
    props:['exam','questions'],
    data() {
        return{
            virticalStyle:{
                display:'flex',
                height: '30px',
                lineHeight: '30px'
            }
        }
    },
    mounted(){
        this.questions.forEach(q=>{
            for(let i=q.options.length-1; i>0; i--){
                const j = Math.floor(Math.random()*(i+1));
                [q.options[i], q.options[j]] = [q.options[j], q.options[i]]
            }
            return q.array;
        })
    },
    methods:{
    }

}

</script>
