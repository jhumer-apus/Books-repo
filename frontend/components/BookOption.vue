<template>
  <div class="absolute bottom-0 right-0 left-0 text-center py-4 text-2xl">
    <button class="update" @click="showUpdateBook= !showUpdateBook">Update</button><br>
    <button class="delete" @click="delete_">Delete</button>
    <UpdateBook v-if="showUpdateBook" @updateName="update" @cancel="cancel"/>
  </div>
</template>

<script>
import UpdateBook from './UpdateBook.vue';

export default {
    name:'BookOption',
    emits:['update','delete'],
    components:{
    UpdateBook,
    },
    data(){
      return{
        showUpdateBook:false
      }
    },
    methods:{
       update: function(objUp){
            this.$emit('update',objUp.bookName)
            this.showUpdateBook = objUp.closeBox
       },
       cancel: function(closeBox){
          this.showUpdateBook = closeBox
       },
       delete_: function(){
            this.$emit('delete')
       }
    }

}
</script>

<style scoped>
.update{
  @apply bg-gray-200  w-48 mb-4 p-2 shadow-md
}
.delete{
  @apply bg-red-600  w-48 p-2 text-white shadow-md
}


</style>