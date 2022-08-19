<template>
  <header class="bg-black h-36 w-screen">
    <ul>
        <li>
            <nuxt-link to="/books">Books</nuxt-link>
        </li>
        <li>
            <nuxt-link to="/aboutus">About Us</nuxt-link>
        </li>
    </ul>
  </header>
</template>

<script>
export default {
    name:'Header'

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