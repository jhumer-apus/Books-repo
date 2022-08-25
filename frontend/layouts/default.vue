<template>
  <div class="flex flex-col">
    <Header />
    <SideNav />
    <Body />
    <Footer />
  </div>
</template>

<script>
import Header from '~/components/Header.vue';
import Footer from '~/components/Footer.vue';
import SideNav from '~/components/SideNav.vue';
import Body from '~/components/Body.vue';

export default {
  components:{
    Header,
    SideNav,
    Body,
    Footer
},
  
}
</script>

<style>
body{
  @apply bg-gray-100
}



</style>