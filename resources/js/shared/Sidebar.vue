<template>
  <div class="flex flex-col">
      <nav-link :href="links.home">Home</nav-link>
      <nav-link :href="links.profile">Profile</nav-link>
      <nav-link :href="links.explore">Explore</nav-link>
      <nav-link :href="links.settings">Settings</nav-link>
  </div>
</template>

<script>
import NavLink from '@/Components/NavLink'
import HomeIcon from '@/Assets/HomeIcon.svg'
export default {
    components : {
        NavLink,
        HomeIcon
    },
    data() {
    return {
        links: {
            home: "/",
            profile: "/profile",
            explore: "/explore",
            settings: "/settings"
        }
    }
},

}
</script>

<style>

</style>