<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Messages
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex content-center w-full">
                   
                        <message-table :data="messages" :headers="headers" />
                    
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import MessageTable from '@/Components/MessageTable'


    export default {
        components: {
            AppLayout,
            MessageTable
        },
        props: [
            'messages'
        ],
        data() {
            return {
                headers: [
                    { 
                        th: 'id', 
                        content: 'id'
                    },
                    { 
                        th: 'User', 
                        content: 'user_id'
                    },
                    { 
                        th: 'Message', 
                        content: 'content'
                    },
                  
                ]
            }
        },
    }
</script>
