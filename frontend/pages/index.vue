<template>
  <section class="p-72">
 

      <h1 class="text-center font-bold text-3xl">Welcome {{ user.name }}</h1>

      

  </section>
</template>

<script>
export default {
  layout:'default',
  name:'Index',
  data() {
    return {
      user: this.$auth.user.data,
    }
  },
  
}
</script>
