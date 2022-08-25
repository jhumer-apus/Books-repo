<template>

  <div class="m-auto shadow-xl w-96  bg-white p-8">

    <label>Email:</label>
    <input type="email" v-model="email" class="credential" placeholder="Email...">

    <label class="mt-8">Password:</label>
    <input type="password" v-model="password" class="credential" placeholder="Password...">
    <button @click.prevent="login">Login</button>
  </div>
 
 
</template>

<script>
export default {
  layout:'login',
  data(){
    return{
      email:'',
      password:'',
    }
  },
  methods: {
    async login() {
      await this.$auth.loginWith('laravelSanctum', {
        data: {
          email: this.email,
          password: this.password,
        },
      })

    },
  },
}
</script>
<style scoped>

.credential{
  @apply outline-none border-none text-xl p-2 w-72 block ml-auto mr-auto bg-gray-200
}

button{
  @apply block shadow-md bg-green-200 py-2 px-16 text-xl text-center m-auto mt-8 font-semibold
}

label{
  @apply text-xl p-2 w-72 block ml-auto mr-auto
}

</style>