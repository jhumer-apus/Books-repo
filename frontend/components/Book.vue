<template>
  <li class="relative shadow-xl ml-20 mt-10 float-left h-96">
    <div  class="book"   :class="{highlight:clicked}"  @click="clicked=!clicked">
      {{book.id + " " + book.name}}
    </div>
    <BookOption class="invisible" :class="{hide:clicked}" @update="update" @delete="delete_"/>
  </li>
</template>

<script>
import axios from 'axios';
import BookOption from './BookOption.vue';


export default {

  components:{
    BookOption,
    },

  data(){
    return{

      clicked:false

    }
  },

  props:['book'],
  emits:['update','delete'],

  methods:{
    update: async function(bookName){

      await this.$axios.put("/books", 
        {
          id:this.book.id,
          name:bookName
        })
        this.$emit('update')
    },

    delete_: async function(){
      await this.$axios.delete("/books/" + this.book.id)
      this.$emit('delete')
    }
  }

}
</script>

<style scoped>

.hide{
  @apply visible !important
}

.highlight{
  filter:blur(2px);
}

.book{
  @apply text-3xl  bg-white py-8 px-8 h-96 w-80 font-semibold 
}



</style>