<template>


<div class="d-flex align-contents-between" style="position:relative; left:85px; ">


  <div class="card mb-3" style="margin-left:20px;" v-for="booking in services" :key="booking.id">
     <div class="card-header bg-success" >
        <h3>{{booking.bus_name}}</h3>
        
     </div>
        
          <div class="card-body" style="width: 200px;">
            <h5>Specifications</h5>
          </div>
          <ul>
            <li v-for="capacity in booking.services" :key="capacity.id">
            {{capacity.maximum_seats}}  
             {{capacity.plate_no}} 
            {{capacity.franchise_no}}

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

