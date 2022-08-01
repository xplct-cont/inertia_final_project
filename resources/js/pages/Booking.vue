<template>
<div class="card" style="width: 200px; left: 500px;">
        <h1>Bookings</h1>
     </div>

   
    <div class="col-md-10" style=" margin-left: 150px; margin-top: 20px;">
     <table class="table table-bordered bg-success rounded">
      <thead class="text-center text-light">
        <tr>
            <th>Operator</th>
            <th>Bus Name</th>
            <th>Point of Origin</th>
            <th>Start Time</th>
            <th>Destination</th>
            <th>Drop Time</th>
            <th>Ticket No</th>
            <th>Passenger Name</th>
            <th>Age</th>
        </tr>
      </thead>

      <tbody class="text-center bg-secondary text-white">
           <tr v-for="booking in bookings" :key="booking.id">
            <td>{{booking.operator}}</td>
            <td>{{booking.bus_name}}</td>
            <td>{{booking.point_of_origin}}</td>
            <td>{{booking.start_time}}</td>
            <td>{{booking.destination}}</td>
            <td>{{booking.drop_time}}</td>
            <td>{{booking.ticket_no}}</td>
            <td>{{booking.passenger_name}}</td>
            <td>{{booking.age}}</td>

            </tr>
            

      </tbody>


     </table>
     </div>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../shared/Layout.vue'
       
    
</script>

<script>
export default {
   
   layout: Layout,

   props: {
    bookings: Array 
   }
}

</script>
