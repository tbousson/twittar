<template>
    <front-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Home 
            </h2>
        </template>

        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-5">
                    <h2 class="text-gray-100 text-2xl">Home</h2>
                    <create-message></create-message>
                    <explore-container :data="data" />
                </div>
            </div>
        </div>
    </front-layout>
</template>

<script>
    import FrontLayout from '@/Layouts/FrontLayout'
    import ExploreContainer from '@/Components/ExploreContainer'
    import CreateMessage from '@/Components/CreateMessage'

    export default {
        components: {
            FrontLayout,
            ExploreContainer,
            CreateMessage
                
            
        },
        props: [
            'data'
        ]
       
    }
</script>
<style scoped>

</style>
