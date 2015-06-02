<?php include('includes/topPage.php'); ?>
<?php include('includes/db_connect.php'); ?>

 <script>
    function showCardio(){
    
       document.getElementById("stollweights").style.display="none";
       document.getElementById("stollcardio").style.display="initial";

    }
 
     function showWeights(){
    
       document.getElementById("stollcardio").style.display="none";
       document.getElementById("stollweights").style.display="initial";
    }

</script>

<body>

<div class="ct" id="tm3">
<div class="ct" id="tm2">
 <div class="ct" id="tm1">
 <div class="ct" id="t0">
 <div class="ct" id="t1">
  <div class="ct" id="t2">
    <div class="ct" id="t3">
      <div class="ct" id="t4">
      
        <ul id="menu">
         <a href="#tm2">
            <li class="icon fa fa-calendar" id="m2"><br>Monday</li>
          </a>
          <a href="#tm1">
            <li class="icon fa fa-calendar" id="m1"><br>Tuesday</li>
          </a>
          <a href="#t0">
            <li class="icon fa fa-calendar" id="zero"><br>Wednesday</li>
          </a>
          <a href="#tm3">
            <li class="icon fa fa-calendar" id="m3"><br>Thursday</li>
          </a>
          <a href="#t2">
            <li class="icon fa fa-calendar" id="dos"><br>Friday</li>
          </a>
          <a href="#t3">
            <li class="icon fa fa-calendar" id="tres"><br>Saturday</li>
          </a>
          <a href="#t4">
            <li class="icon fa fa-calendar" id="cuatro"><br>Sunday</li>
          </a>
        </ul>
        
        <!-- Monday -->
        <div class="page" id="pm2">
          <?php include('icons.php'); ?>
        </div>
  


        <!-- Tuesday -->
        <div class="page" id="pm1">
          <?php include('icons.php'); ?>
        </div> 


        <!-- Wednesday -->
        <div class="page" id="p0"> 

        </div> 


        <!-- Thursday -->
        <div class="page" id="pm3">

        </div>   

        <!-- Friday -->
        <div class="page" id="p2">

        </div>
        
        <!-- Saturday -->
        <div class="page" id="p3">

        </div>
        
        <!-- Sunday -->
        <div class="page" id="p4">
        
        </div>

     </div>
    </div>
  </div>
 </div>
 </div>
 </div>
</div>
</div>
</body>
</html>
<?php include("includes/bottomPage.php"); ?>
