<template>
    <front-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile 
            </h2>
        </template>

        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-5">
                   <user-info :user="user"></user-info>
                    <message-container :data="data" :user="user">

                    </message-container>
                
                </div>
            </div>
        </div>
    </front-layout>
</template>

<script>
    import FrontLayout from '@/Layouts/FrontLayout'
    import UserInfo from '@/Components/UserInfo'
    import MessageContainer from '@/Components/MessageContainer'

    export default {
        components: {
            FrontLayout,
            UserInfo,
            MessageContainer
        },
        props: [
            'data',
            'user'
        ]
       
    }
</script>
<style scoped>

</style>
