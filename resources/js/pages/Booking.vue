<template>
<div class="card" style="width: 1000px; left: 110px;">
        <h1 class="text-center" style="font-size: 30px; font-family: 'Courier New', Courier, monospace; color: dimgray;">BOOKINGS</h1>
     
     <table class="table rounded bg-success text-light" style="margin:auto">

        <thead>
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
