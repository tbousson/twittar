<template>
    <div class="bg-gray-700 flex flex-row m-2 rounded px-2 py-4" >
    
        <div class="flex-shrink-0">
        <inertia-link :href="'/'+comment.user.displayName">
            <img :src="comment.user.profile_photo_url" class="h-16 w-16 rounded-full object-cover border-gray-900 border-solid border-4">
            </inertia-link>
        </div>
      
        <div class="w-full">
            
                <div class="flex flex-col px-2">
                    <div class="text-gray-300 border-b-2 mb-2 pb-2 border-gray-600">
                        {{comment.user.name}} - {{comment.user.displayName}} - <span class="text-gray-400 text-sm">{{comment.created_at}}</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="text-gray-200 mb-4">
                        {{comment.content}}
                        </div>
                       
                    </div>
                </div>
            
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'comment',
        
        
    ]

}
</script>

<style>

</style>