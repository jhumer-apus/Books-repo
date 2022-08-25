<template>
  <header class="bg-black h-36 w-screen">
    <ul>
        
        <li>
            <nuxt-link class="hover:text-blue-200" to="/books">Books</nuxt-link>
        </li>
        <li>
            <nuxt-link class="hover:text-blue-200" to="/aboutus">About Us</nuxt-link>
        </li>
        <li><a href="#" @click.prevent="logout">Logout</a></li>
    </ul>
  </header>
</template>

<script>
export default {
    name:'Header',
    methods: {
        async logout() {
            await this.$auth.logout()

            this.$router.push('/login')
        },
    },
}
    

</script>

<style scoped>

li{
    @apply text-white inline-block text-2xl ml-20
}

ul{
    @apply float-right mr-48 mt-16
}


</style>