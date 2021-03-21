<template>
  <div class="flex flex-col">
      
      <message v-for="d in data" :key="d.id" :user="d.user" :message="d"></message>
      
  </div>
</template>

<script>
import Message from '@/Components/Message'
export default {
    components: {
        Message
    },
    props: [
        'data'
    ]
}
</script>

<style>

</style>