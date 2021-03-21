<template>
    <div class="bg-gray-900 h-full">
        <div class="mx-3">
            <div class="flex flex-row">
                <div class="w-1/6 mt-5">
                    <Sidebar />
                </div>
                
                

                    <!-- Page Content -->
                    <main class="w-4/6">
                        <slot></slot>
                    </main>
                <div class="w-1/6 mt-5">
                    sidebar right
                </div>
            </div>
        </div>
        <footer class="mx-auto text-indigo-200 bg-gray-800 py-3 mt-2">
            <div class="text-center">Twittar - 2021</div> 
        </footer>
    </div>
</template>

<script>
    import Sidebar from '@/shared/Sidebar'

    export default {
        components: {
            Sidebar
        },

        data() {
            return {
                
            }
        },

        methods: {
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    }
</script>
<style scoped>

</style>