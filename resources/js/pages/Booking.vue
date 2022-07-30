<template>

        <h1>Bookings</h1>

     <p>{{message}}</p>
     <button @click="decrement">-</button>
     <p>{{number}}</p>
     <button @click="increment">+</button>
</template>

<script setup>
import {ref} from 'vue'

        const message = "Hello This is testing";
        
        const number = ref(0)

        function increment(){
            number.value++;
        }

        function decrement(){
            number.value--;
        }

</script>