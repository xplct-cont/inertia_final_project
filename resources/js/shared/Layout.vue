<template>
    
<nav class="navbar bg-success shadow-lg p-2 mb-5 bg-success" style="margin:auto; height: 56px;" >
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/images/logo.png" alt="" width="50" height="50" >
      <p style="position:relative; left:-23px; color:white;">&nbsp;Bus Booking System</p>
    </a>
  </div>
</nav>

<div class="sidebar bg-light shadow-lg p-2 mb-5 bg-white">


  <Link class="rounded" :class="{'active': $page.component=='Home'}" href="/">  <i class="fa fa-home">&nbsp;&nbsp;&nbsp;</i>Home </Link>


  <Link class="rounded" :class="{'active': $page.component=='Service'}" href="/service"><i class="fa fa-bus">&nbsp;&nbsp;&nbsp;</i>Buses</Link>

  <Link class="rounded" :class="{'active': $page.component=='Booking'}"  href="/booking"><i class="fa fa-list">&nbsp;&nbsp;&nbsp;</i>Bookings</Link>


</div>



<section class="container bg-white" style="margin-left: 140px;">
    <slot />
</section>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'


</script>

<style scoped>

body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: #f1f1f1;
  position: fixed;
  top: 56px;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #292b2c;
  color: white;
}



.sidebar a:hover:not(.active) {
  background-color: gray;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

   img{
     position: absolute;
     top: 3px;
     left:5px;
   }


    
</style>
