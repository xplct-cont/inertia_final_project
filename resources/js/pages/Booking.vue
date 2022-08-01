<template>
<div class="card" style="width: 200px; left: 500px;">
        <h1>Bookings</h1>

     <p>{{message}}</p>
     <button @click="decrement">-</button>
     <p>{{number}}</p>
     <button @click="increment">+</button>
     </div>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../shared/Layout.vue'
       
       const message = "Hello This is testing";
        
        const number = ref(0)

        function increment(){
            number.value++;
        }

        function decrement(){
            number.value--;
        }

</script>

<script>
export default {
   
   layout: Layout
}

</script>
