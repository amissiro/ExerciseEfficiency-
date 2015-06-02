<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Multi-step form interface</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <form id="signup" action="somewhere" method="POST">
    <ul id="section-tabs">
      <li class="current active"><span>1.</span> Creds</li>
      <li><span>2.</span> Deets</li>
      <li><span>3.</span> Settings</li>
      <li><span>4.</span> Last Words</li>
    </ul>
  <div id="fieldsets">
  <fieldset class="current">
      <table border="1">

            
          <tr>
            <td>Enter Workout</td>
            <td colspan="3"><input type="text" name="lName" /></td>
          </tr>
          <tr>
            <td>Enter Workout</td>
            <td colspan="3"><input type="text" name="lName" /></td>
          </tr>
          <tr>
            <td>Enter Workout</td>
            <td colspan="3"><input type="text" name="lName" /></td>
          </tr>
          
          
          <tr>
            <td>Enter Rest Duration Between Sets</td>
            <td colspan="3"><input type="email" name="email" /></td>
          </tr>     

        </tbody>
      </table>
  </fieldset>
  <fieldset class="next">
          <tr>
            <td>Enter Sets:</td>
            <td colspan="1"><input type="text" name="fName" /></td>
            <td>Enter Reps:</td>
            <td colspan="1"><input type="text" name="fName" /></td>
          </tr>

  </fieldset>
  <fieldset class="next">

          <tr>
            <td>Enter Duration</td>
            <td colspan="3"><input type="text" name="zip" /></td>
          </tr>
          
          <tr>
            <td>Enter Rest Duration Between Sets</td>
            <td colspan="3"><input type="email" name="email" /></td>
          </tr> 

  </fieldset>


  <fieldset class="next">
Confirmation Page
  </fieldset>

  
  <a class="btn" id="next">Next Section ▷</a>
  <input type="submit" class="btn">
  </div>
</form>
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<!--     
    <script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 -->
        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
