<template>
  <div class="m-auto w-10/12 relative">
    <h1 class="text-3xl text-center mt-16 font-bold">Books</h1>
      <h2 class="font-semibold text-2xl ml-20 cursor-pointer hover:text-indigo-700" @click="back">Go Back</h2>
      <SearchBar />
      <ul class="mt-12">
          <Book v-if="book.length != 0" :book="book" @update="update" @delete="delete_" />
      </ul>
  </div>
</template>

<script>
import axios from 'axios'
import Book from '~/components/Book.vue';
export default {
  data(){
    return{
      book:""
    }

  },
  layout:'default',

  async created(){
    this.getData()
    
  },

   methods:{

      getData: async function(){
        try{

          const res = await axios.get("http://127.0.0.1:8000/api/books/" + this.$route.params.name)
          const [book] = res.data
        
          this.book = book
      

        }catch(err){

          console.log(err);
        }
      },

      update: async function(){
        this.getData()
      },
      
      delete_: async function(){
        this.getData()
      },
      back: function(){
        this.$router.back()
      }
    }

}
</script>

<style>

</style>