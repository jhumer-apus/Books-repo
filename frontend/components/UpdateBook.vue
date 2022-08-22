<template>
  <div class="absolute bg-gray-300 top-0 w-full h-full z-10 p-4">
    <div class="m-auto">
        <input type="text" v-model="bookName" class="outline-none border-none text-xl p-2 w-72 shadow-md mb-4" placeholder="New Name...">
        <button class="bg-white p-2 w-28 shadow-md" @click="updateName">Ok</button>
        <button class="ml-8 bg-white p-2 w-28 shadow-md" @click="cancel">Cancel</button>
    </div>

  </div>
</template>

<script>
export default {
    name:'UpdateBook',
    emits:['updateName','cancel'],
    data(){
        return{
            bookName:"",
        }
    },
    methods:{
        updateName: function(){
            this.$emit("updateName", {bookName:this.bookName, closeBox:false})
            this.bookName=""
        },
        cancel: function(){
            this.$emit("cancel", false)
            this.bookName=""
        }
    }
}
</script>

<style>

</style>