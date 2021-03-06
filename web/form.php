<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Multi-step form interface</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <style>

  @import url(fonts.googleapis.com/css?family=Merriweather+Sans:300);
@import url(fonts.googleapis.com/css?family=Merriweather+Sans:700);
body {
  background: url(http://farm5.staticflickr.com/4139/4825532997\_7a7cd3d640\_b.jpg);
  background-size: cover;
  height: 100%;
  font-family: 'Merriweather Sans', sans-serif;
  color: #666;
}
#signup {
  width: 75%;
  height: 75%;
  padding: 20px;
  background: #fff;
  margin: 80px auto;
  position: relative;
  min-height: 300px;
}
#fieldsets {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  overflow: hidden;
}
input[type=text],
input[type=email],
input[type=password],
input[type=tel],
textarea {
  display: block;
  -webkit-appearance: none;
  -moz-appearance: none;
  width: 100%;
  box-sizing: border-box;
  border: 1px solid #ddd;
  padding: 8px;
  margin-bottom: 8px;
  position: relative;
}
input[type=text]:focus,
input[type=email]:focus,
input[type=password]:focus,
input[type=tel]:focus,
textarea:focus {
  outline: none;
  border: 1px solid #22918b;
}
input[type=radio] {
  margin: 6px;
  display: inline-block;
}
fieldset {
  border: none;
  position: absolute;
  left: -640px;
  width: 600px;
  padding: 10px 0;
  transition: all 0.3s linear;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  -ms-transition: all 0.3s linear;
  opacity: 0;
}
fieldset.current {
  left: 20px;
  opacity: 1;
}
fieldset.next {
  left: 640px;
}
input[type=submit] {
  display: none;
  border: none;
}
#section-tabs {
  font-size: 0.8em;
  height: 50px;
  position: relative;
  margin-top: -50px;
  margin-bottom: 50px;
  padding: 0;
  font-weight: bold;
  list-style: none;
  text-transform: uppercase;
}
#section-tabs li {
  color: #a7a7a7;
  cursor: not-allowed;
  border-left: 1px solid #aaa;
  text-decoration: none;
  padding: 0 6px;
  float: left;
  width: 25%;
  box-sizing: border-box;
  text-align: center;
  font-weight: bold;
  line-height: 30px;
  background: #ddd;
  position: relative;
}
#section-tabs li span {
  color: #bababa;
}
#section-tabs li.active {
  color: #444;
  cursor: pointer;
}
#section-tabs li:after {
  content: "";
  display: block;
  margin-left: 0;
  position: absolute;
  left: 0;
  top: 0;
}
#section-tabs li.current {
  opacity: 1;
  background: #fff;
  z-index: 999;
  border-left: none;
}
#section-tabs li.current:after {
  border: 15px solid transparent;
  border-left: 15px solid #2cbab2;
}
.error {
  color: #bf2424;
  display: block;
}
input.error,
textarea.error {
  border-color: #bf2424;
}
input.error:focus,
textarea.error:focus {
  border-color: #bf2424;
}
label.error {
  margin-bottom: 20px;
}
input.valid {
  color: green;
}
label.valid {
  position: absolute;
  right: 20px;
}
input + .valid,
textarea + .valid {
  display: none;
}
.valid + .valid {
  display: inline;
  position: absolute;
  right: 10px;
  margin-top: -36px;
  color: green;
}
.btn {
  border: none;
  padding: 8px;
  background: #2cbab2;
  cursor: pointer;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  color: #fff;
  position: absolute;
  bottom: 20px;
  right: 20px;
  font-family: 'Merriweather Sans', sans-serif;
}
.btn:hover {
  background: #26a19a;
}


</style>

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
        <script src="js/form.js"></script>

    
    
    
  </body>
</html>
