<template>
  <div>
    <Header />
    <SideNav />
    <h1 class="text-3xl text-center mt-20">Books</h1>
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
}

}
</script>

<style>

</style>