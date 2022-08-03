<template>
<h1 class="text-center" style="font-size:30px; font-family:'Courier New', Courier, monospace; color: dimgray;">Available Buses</h1>

<div class="d-flex align-contents-between" style="position:relative; left:150px; ">
  <div class="card mb-3 bg-secondary" style="margin-left:20px;" v-for="booking in services" :key="booking.id">
     <div class="card-header bg-success">
        <h3 style="font-size:20px; color: white;">{{booking.bus_name}}</h3>        
     </div><hr style="size: 1px; color:white;">
        
          <div class="card-body" style="width: 200px;">
          
          </div>
          <ul>
            <li v-for="capacity in booking.services" :key="capacity.id"><h5 style="color:white; font-family: 'Courier New', Courier, monospace;">Bus Details</h5><br>
            <h4 style="font-size:15px; color: white;">Maximum Capacity:</h4> {{capacity.maximum_seats}}  <br><br>
            <h4 style="font-size:15px; color: white;">Plate No:</h4> {{capacity.plate_no}} <br><br>
            <h4 style="font-size:15px; color: white;">Franchise No:</h4>  {{capacity.franchise_no}}
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
    // services: Array
    services: Array
   
   },

  
}

</script>

