<template>
    <div class="bg-gray-700 flex flex-row m-2 rounded px-2 py-4" >
    
        <div class="flex-shrink-0">
        <inertia-link :href="'/'+user.displayName">
            <img :src="user.profile_photo_url" class="h-16 w-16 rounded-full object-cover border-gray-900 border-solid border-4">
            </inertia-link>
        </div>
      
        <div class="w-full">
            <inertia-link :href="'/'+user.displayName+'/'+message.id">
                <div class="flex flex-col px-2">
                    <div class="text-gray-300 border-b-2 mb-2 pb-2 border-gray-600">
                        {{user.name}} - {{user.displayName}} - <span class="text-gray-400 text-sm">{{message.created_at}}</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="text-gray-200 mb-4">
                        {{message.content}}
                        </div>
                        <div class="flex flex-row text-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                            <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <span class="text-sm pl-0.5">{{message.comments_count}}</span>  
                        </div>
                    </div>
                </div>
            </inertia-link>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'message',
        'user',
        
    ]

}
</script>

<style>

</style>