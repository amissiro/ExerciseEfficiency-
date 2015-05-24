<?php include 'includes/topPage.php'; ?>

<div class="container">

  <center>
  <h2>Please select the days you wish to exercise</h2>
  
  <p>TODO:
    When a user checks days it will create (a popup/balloon or a better idea?) that will ask them do you want this to be cardio or weight lifting day? 
  </p>

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
  <button id="submit" onClick="parent.location='day.php'">Submit</button>

</center>
</div>

<?php include 'includes/bottomPage.php'; ?>
