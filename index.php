<!DOCTYPE html>
<html>
<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gatepass";
          
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

session_start();
if(!isset($_SESSION['rollno']) && !isset($_SESSION['name']))
{
     
}

else{
echo "<script>window.location='dashboard.php';</script>";
	}

?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Gate Pass</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/hover-min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style type="text/css">
     .hvr-underline-from-center:before {
      background: #7e57c2!important;
    }
  </style>
</head>
<body class="white lighten-4">

  <nav class="blue lighten-2" role="navigation">
    <div class="nav-wrapper container">
      
      <a id="logo-container" style="position: relative;" href="#" class="red-text text-darker-5 brand-logo">Gate Pass</a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a class="red-text hvr-underline-from-center" href="index.php"><b>Login</b></a></li>
        <li><a class="red-text hvr-underline-from-center" href="register.php"><b>Register</b></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a class="red-text" href="index.php">Login</a></li>
        <li><a class="red-text" href="register.php">Register</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<div id="adc">
<center>
	<h3 class="blue-text">Login</h3>
<div style="padding: 50px;">
<div class="container" style="text-align: left;">
	<form id="log" action="javascript:void" method="post">
		<div class="container">
			<div class="input-field col s6">
			<i class="material-icons prefix">assignment_ind</i>
    	     <input id="roll" style="text-transform: uppercase;" name="rollno" length=17 type="text" class="validate">
 	         <label for="roll">Roll No</label>
	    	</div>
			<div class="input-field col s6">
			  <i id="ddss" class="material-icons prefix">lock_open</i>
   		      <input id="psa" name="pass" length=30 type="password" class="validate" >
    	      <label for="psa">Password</label>
    		</div><br>
    		<div class="center">
    	  		<button class="btn-large waves-effect waves-red blue" id="subbtn">Submit</button>
    	  	</div>
    	</div>
  	</form>
</div>
</div>
</center>
</div>
<footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Gate Pass</h5>
          <p class="grey-text text-lighten-4">This site is for taking permission on for students for going out.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="search.php">Login</a></li>
            <li><a class="white-text" href="register.php">Register</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="red-text" href="#!">Facebook</a></li>
            <li><a class="red-text" href="#!">Twitter</a></li>
            <li><a class="red-text" href="#!">Google+</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" style="cursor: wait;" href="#">Team</a>
      </div>
    </div>
  </footer>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/validate.js"></script>
<script type="text/javascript">
</script>
<script type="text/javascript">
  $("#subbtn").click(function() {
  	$("#ddss").html("lock");

    // Setup form validation on the #register-form element
    $("#log").validate({
    
        // Specify the validation rules
        rules: {
            rollno: "required",
            Password: "required"
        },
        
        // Specify the validation error messages
        messages: {
            rollno: "",
            Password: "",
        },
        
        submitHandler: function(form) {
      
            var url = "Login.php"; // the script where you handle the form input.

      $.ajax({
        type: "POST",
        url: url,
        data: $("#log").serialize(), // serializes the form's elements.
        success: function(data) {
          if(data==1){
             window.location='dashboard.php';
          }
          else if(data==2){
             window.location='dashboard2.php';
          }
          else if(data==3){
             window.location='dashboard3.php';
            
          }
          else {
          Materialize.toast(data, 10000);
          $("#ddss").html("lock_open");// show response from the php script.
      }
        }
         });

        return false; // avoid to execute the actual submit of the form.
    }
    });

  });

</script>
</body>
</html>