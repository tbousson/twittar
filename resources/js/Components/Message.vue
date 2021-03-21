<template>
  <div class="bg-gray-700 flex flex-row m-2 rounded px-2 py-4">
      <div class="w-1/12">
        <inertia-link :href="user.displayName">
            <img :src="user.profile_photo_url" class="w-full">
          </inertia-link>
      </div>
      <div>
          <div class="flex flex-col px-2">
              <div class="text-gray-300  mb-2">
                  {{user.name}} - {{user.displayName}}
              </div>
              <div>
                  {{message.content}}
              </div>
          </div>
        </div>
      
  </div>
</template>

<script>
export default {
    props: [
        'message',
        'user'
    ]

}
</script>

<style>

</style>