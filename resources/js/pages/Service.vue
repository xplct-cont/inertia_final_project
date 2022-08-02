<template>


<div class="d-flex align-contents-between">


  <div class="card mb-3" style="margin-left: 200px;" v-for="bus in buses" :key="bus.id">
     <div class="card-header bg-success">
        <h3>{{bus.bus_name}}</h3>
        
  
     </div>
          
          <div class="card-body">
            <h5>Specifications</h5>
          </div>


          <!-- <ul>
            <li v-for="service in services" :key="service.id">
            {{service.maximum_seats}}

            </li>
          </ul> -->
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
    buses: Array
   
   },

  
}

</script>

