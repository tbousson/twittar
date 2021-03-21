<template>
    <front-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Home
            </h2>
        </template>

        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                </div>
            </div>
        </div>
    </front-layout>
</template>

<script>
    import FrontLayout from '@/Layouts/FrontLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            FrontLayout,
            Welcome,
        },
    }
</script>
<style scoped>

</style>
