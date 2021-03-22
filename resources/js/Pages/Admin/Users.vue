<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <user-table :data="users" :headers="headers"></user-table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import UserTable from '@/Components/UserTable'

    export default {
        components: {
            AppLayout,
            UserTable
        },
        props: [
            'users'
        ],
          data() {
            return {
                headers: [
                    { 
                        th: 'Id', 
                        content: 'id'
                    },
                    { 
                        th: 'Name', 
                        content: 'name'
                    },
                    { 
                        th: 'Display Name', 
                        content: 'displayName'
                    },
                    { 
                        th: 'Email', 
                        content: 'email'
                    },
                  
                ]
            }
        },
    }
</script>
