<template>
  <section class="h-96 w-screen flex items-center">
    <div class="m-auto">
      <h1 class="text-center font-bold text-3xl">Welcome {{ user.name }}</h1>
    </div>
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
