<template>
  <div class="mb-5 flex flex-row justify-between">
      <div class="flex flex-row">
          <div class="mr-3">
            <img :src="user.profile_photo_url" class="h-36 w-36 rounded-full object-cover border-gray-900 border-solid border-4" />
          </div>
          <div>
            <h1 class="text-gray-200 text-2xl font-bold">{{user.displayName}}</h1>
          <h2 class="text-gray-300 text-lg">{{user.name}}</h2>
          </div>
      </div>
      <div class="text-gray-200 flex flex-row">
        <div class="flex mx-5">
          <span class="font-bold pr-2">{{user.followers_count}}</span> Followers</div>
        <div class="flex mx-5">
          <span class="font-bold pr-2">{{user.followings_count}} </span> Following</div>
          
      </div>
        
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