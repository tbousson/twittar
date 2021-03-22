<template>
  <div class="mb-5">
        <img :src="user.profile_photo_url" class="h-36 w-36 rounded-full object-cover border-gray-900 border-solid border-4" />
        <h1 class="text-gray-200 text-2xl font-bold">{{user.displayName}}</h1>
        <h2 class="text-gray-300 text-lg">{{user.name}}</h2>
        
  </div>
</template>

<script>
export default {
    props: [
        'user'
    ]
}
</script>

<style>

</style>