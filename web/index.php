<?php require('../vendor/autoload.php'); ?>
<?php include('includes/topPage.php'); ?>
<?php include('includes/db_connect.php'); ?>

<center>
<font size = "18">Welcome to the Exercise Efficiency Calendar!</font>


  <form class="form-signin" method="post" action="option.php">

    <h1 class="form-signin-heading text-muted">Sign In </h1>
    
    <input type="text" class="form-control" placeholder="Username" name = "username">
    <input type="password" class="form-control" placeholder="Password" name = "psw">
   
    <button class="btn btn-lg btn-primary btn-block" type="submit">
      Sign In
    </button>
    
    <br><br><br>
  <div class="alert alert-danger" role="alert" id="error" style="visibility:hidden">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
        Enter valid login information

  </div>
   </form>

</center>

</body>
</html>
 
<?php include("includes/bottomPage.php"); ?>