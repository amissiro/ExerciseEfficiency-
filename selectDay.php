<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ExerciseEfficiency</title>
  <meta name="description" content="My Parse App">
  <meta name="viewport" content="width=device-width">
  <!--<link rel='stylesheet' type='text/css' href='stylesheet.css'/>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.parsecdn.com/js/parse-1.2.18.min.js"></script>

  <link rel="stylesheet" href="css/style.css">
  <script type = "text/javascript" src="js/javascript.js"></script>
</head>
<body>

<div class="container">

  <center>
  <h2>Please select the days you wish to exercise</h2>
  <p>Check the following days of the week:</p>

  <form role="form">
    <br>

    <label class="checkbox-inline">
      <input type="checkbox" value="">Sunday
    </label>
    
    <label class="checkbox-inline">
      <input type="checkbox" value="">Monday
    </label>
    
    <label class="checkbox-inline">
      <input type="checkbox" value="">Tuesday
    </label>
    
    <label class="checkbox-inline">
      <input type="checkbox" value="">Wednesday
    </label>
    
    <label class="checkbox-inline">
      <input type="checkbox" value="">Thursday
    </label>
    
    <label class="checkbox-inline">
      <input type="checkbox" value="">Friday
    </label>
    
    <label class="checkbox-inline">
      <input type="checkbox" value="">Saturday
    </label>

  </form>

  <br><br>
  <button id="submit" onClick="parent.location='index.php'">Submit</button>

</center>
</div>

</body>
</html>
