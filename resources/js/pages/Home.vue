<template>

<div class="card bg-light shadow-lg p-2 bg-white" style="width: 45%; left: 600px; top: -30px; height: 282px;;">
<img src="/images/bus2.png" alt="" width="500" height="280" class="rounded" >

</div>



<div class="card bg-light shadow-lg mb-5 p-2 bg-white" style="width: 40%; left: 120px; top: -310px;">
<div class="image">
    <img src="/images/logotwo.png" alt=""  width="50" height="50" style="margin-top: 5px; margin-left:5px;">
     <h1 style="font-size:30px; position:absolute; top: 12px; left: 80px;">Welcome To Our Site</h1>
     
   <br><br>
     Here's what we Promise...
      <img src="/images/tag.png" alt=""  width="110" height="80" style="margin-top: 5px; margin-left:5px;">
  
 </div>
  <div class="card shadow-lg p-2  bg-success">

  <h2 style="font-size: 20px; margin-left: 80px; color: white;">Amazing travel offers await!</h2>
<br>
    <h3 style="font-size: 15px; font-weight:normal; color: whitesmoke;">&nbsp;Want to receive amazing deals? </h3>
</div>
</div>
    
 <div class="ss">
            <div class="card shadow-lg p-3 mb-5 bg-success rounded" style="width: 16rem; height:14.5rem;">
              <img class="card-img-top" style="height:120px; position:absolute; top:0px; left: 0.1px;" src="/images/intro.png">
                 <div class="card-body">
                     <h5 class="card-title" style="color: whitesmoke; top:55%; position:relative; font-size:16px; font-weight:bold;">Save $100 on Luxury Bus Rental</h5>
                       <p class="card-text"  style="color: whitesmoke; top:50%; position:relative; font-size:14px;">Looking for a cheap weeekly Bus fare that wont't leave your wallet empty?</p>
                     
              </div>
           </div>
        </div>


         <div class="sd">
            <div class="card shadow-lg p-3 mb-5 bg-success rounded" style="width: 16rem; height:14.5rem;">
              <img class="card-img-top" style="height:120px; position:absolute; top:0px; left: 0.1px;" src="/images/eating.jpg">
                 <div class="card-body">
                     <h5 class="card-title" style="color: whitesmoke; top:55%; position:relative; font-size:16px; font-weight:bold;">Season Bus Lunch Discount</h5>
                       <p class="card-text"  style="color: whitesmoke; top:50%; position:relative; font-size:14px;">Promotional Deals starting from 100$ per day</p>
                       
              </div>
           </div>
        </div>


        
         <div class="sf">
            <div class="card shadow-lg p-3 mb-5 bg-success rounded" style="width: 16rem; height:14.5rem;">
              <img class="card-img-top" style="height:120px; position:absolute; top:0px; left: 0.1px;" src="/images/lpbus.jpg">
                 <div class="card-body">
                     <h5 class="card-title" style=" color: whitesmoke; top:55%; position:relative; font-size:16px; font-weight:bold;">Low Prices on Rental Bus Everyday</h5>
                       <p class="card-text"  style="color: whitesmoke; top:50%; position:relative; font-size:14px;">Bus for discounted rates and weekly specials</p>
                       
              </div>
           </div>
        </div>




</template>


<script setup>
import Layout from '../shared/Layout.vue'


</script>

<script>
export default {
   
   layout: Layout
}

</script>

<style scoped>
body{
    margin:0;
}

img{
    position: relative;
    left: -8px;
    top: -8px;
}


.ss{
    position: absolute;
    top: 62%;
    left: 21.5%;
}


.sd{
    position: absolute;
    top: 62%;
    left:50.5%;
}


.sf{
    position: absolute;
    top: 62%;
    left:79%;
}



</style>


