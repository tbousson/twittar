<template>
  <div class="py-3 px-3 flex flex-col">
      <form @submit.prevent="submit">
        <div class="pb-2">
            <textarea type="text" name="content" v-model="form.content" placeholder="Write your message..." 
        class="w-full bg-gray-800 text-gray-200 border-none resize-none outline-none  rounded focus:bg-gray-900"></textarea>
        </div>
        
        <div class="flex justify-end">
            <button class="bg-green-500 py-2 px-3 rounded-xl text-white hover:bg-green-400">Spread Message</button>
        </div>
      </form>
      
  </div>
</template>

<script>
export default {
    data() {
        return {
            form:{
                content: ''
            }
            
        }
    },
    methods: {
    submit() {
       console.log(this.form) 
      this.$inertia.post('/createMessage', this.form)
    },
  },
}
</script>

<style scoped>
textarea:focus {
  box-shadow: none;
  outline: none;
  
 }
</style>