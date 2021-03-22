<template>
  <div class="flex flex-col">
      <message v-for="message in data" :key="message.id" :user="user" :message="message"></message>
  </div>
</template>

<script>
import Message from '@/Components/Message'
export default {
    components: {
        Message
    },
    props: [
        'data',
        'user'
    ]
}
</script>

<style>

</style>