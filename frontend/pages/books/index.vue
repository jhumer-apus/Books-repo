<template>
  <div class="m-auto w-10/12 relative">
    <h1 class="text-3xl text-center mt-16 font-bold">Books</h1>
      <AddBook @added="added"/>
      <SearchBar />
      <ul class="mt-12">
          <Book v-for="book in books" :key="book.id" :book="book" @update="update" @delete="delete_"/>
      </ul>
  </div>
</template>

<script>
import Book from '~/components/Book.vue';
import axios from "axios";
import SearchBar from '../../components/SearchBar.vue';
import AddBook from '~/components/AddBook.vue';


export default {
  components:{
    SearchBar,
    AddBook
},
  data(){
    return{
      books:[]
    }

  },
  layout:'default',

  async created(){
    this.getData()
    
  },

   methods:{

      getData: async function(){
        try{

          const res = await axios.get("http://127.0.0.1:8000/api/books")
          this.books = res.data

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
      
      added: async function(){
        this.getData()
      }
    }
}


</script>

<style>

</style>