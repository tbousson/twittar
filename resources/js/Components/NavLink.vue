<template>
  <inertia-link class="flex hover:bg-gray-600 rounded-full w-full py-2 cursor-pointer text-indigo-50" :href="href">
    
      <div class="icon w-5 h-5">
        {{icon}}
      </div>
      
        <slot></slot>
    
  </inertia-link>
</template>

<script>
    export default {
        props: ['href', 'active','icon','href'],

        computed: {
            classes() {
                return this.active
                            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
                            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'
            }
        }
    }
</script>

<style scoped>
  .icon {
    width: 24px;
    height: 24px;
    color: black;
  }
</style>