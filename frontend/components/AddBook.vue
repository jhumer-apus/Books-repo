<template>
  <div class="flex item-center absolute left-20 bg-white shadow-md">
    <input type="text" v-model="bookName" class="outline-none border-none text-xl p-2 w-72" placeholder="Book Name..." @keyup.enter="addBook">
    <button class="p-4 bg-green-200 font-semibold" @click="addBook">Add Book</button>
  </div>
  
</template>

<script>
import axios from 'axios'

export default {
    name:'AddBook',
    emits:['added'],
    data(){
        return{
            bookName:""
        }
    },
    methods:{
        addBook: async function(){

            if(this.bookName.length>0){
                await axios.post("http://127.0.0.1:8000/api/books",{name:this.bookName})
                this.$emit('added')
                
            }
            this.bookName=""
            
        }
    }

}
</script>

<style>

</style>