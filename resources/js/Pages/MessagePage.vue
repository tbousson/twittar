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
                   <message :message="message" :user="message.user"></message>
                   <div class="pl-5">
                    <comment v-for="comment in message.comments" :key="comment.id" :comment="comment"></comment>
                   </div>
                <div>
      
  </div>
                </div>
            </div>
        </div>
    </front-layout>
 
</template>

<script>
 import FrontLayout from '@/Layouts/FrontLayout'
 import UserInfo from '@/Components/UserInfo'
 import Message from '@/Components/Message'
 import Comment from '@/Components/Comment'

export default {
     components: {
            FrontLayout,
            UserInfo,
            Message,
            Comment
            
        },
    props: [
        'message',
        
    ],
      data () {
        return {
          
        }
        },
}
</script>

<style>

</style>