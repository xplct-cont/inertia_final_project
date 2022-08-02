<template>


<div class="d-flex align-contents-between">
<h1 class="text-center" style="font-size: 30px; color:dimgray; position:relative; left: 480px;">Available Buses</h1>

 <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 100px;" >

  
<div class="card-header bg-success" >
   
           Bus Name
           </div>
    

    <div class="card-body">
        Specifications:
    </div>
   

    <ul >
        <li style="margin-right:20px;" v-for = "service in services" :key="service.id">
        {{service.maximum_seats}} {{service.plate_no}} {{service.franchise_no}}
        
        </li>
       
    </ul>
   </div>
</div>




   
</template>


<script setup>
import Layout from '../shared/Layout.vue'
// import Booking from '../Pages/Booking.vue'


</script>

<script>
export default {
   
   layout: Layout,
 

    props: {
    services: Array
   
   },

  
}

</script>

