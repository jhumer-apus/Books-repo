<template>
  <div class="flex item-center absolute right-0 bg-white shadow-md">
    <input class="outline-none border-none text-xl p-2 w-72" type="text"  v-model="search" placeholder="Search Books..." @keyup.enter="submitSearch">
    <button @click="submitSearch">
      <img src="../assets/search.svg" alt="search-icon" height="40" width="40">
    </button>
    
  </div>
</template>

<script>
export default {
    name:'SearchBar',
    data(){
      return{
        search:""
      }
    },
    methods:{
      submitSearch: function(){
        this.$router.push("/books/"+this.search)
      }
    }

}
</script>

<style scoped>


</style>