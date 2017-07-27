<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Gate Pass</title>

  <!-- CSS  -->
  <link href="css/hover-min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
        <li><a class="red-text hvr-underline-from-center" href="index.php"><b>Login</b></a></li>
        <li class="active"><a class="red-text hvr-underline-from-center" href="register.php"><b>Register</b></a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a class="red-text" href="index.php">Login</a></li>
        <li><a class="red-text" href="register.php">Register</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<center>
          
	<h3 class="blue-text"><i class="material-icons medium" style="margin-top: 10px;">account_circle</i> Registration</h3>
<div class="container" style="padding: 50px;text-align: left;">
	<form id="regg" action="javascript:void" method="post">
	<div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="namew" name="name" type="text" class="validate">
          <label for="namew">Name</label>
    </div>
 	<div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="Email" name="email" type="email" class="validate">
          <label for="Email">Email</label>
    </div>
    <div class="input-field col s6">    
          <i class="material-icons prefix">assignment_ind</i>
          <input id="roll" style="text-transform: uppercase;" name="rollno" length=17 type="text" class="validate">
          <label for="roll" >Roll No</label>
    </div>
    <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
          <input id="psa" name="pass" length=17 type="password" class="validate">
          <label for="psa">Password</label>
    </div>
    <div class="input-field col s6">
          <i class="material-icons prefix">contacts</i>
          <input id="mob" name="mobno" type="number" length=13 class="validate">
          <label for="mob">Mobile No</label>
    </div>
    <div class="input-field col s12 m6">
      <i class="material-icons prefix">label</i>
    	<select id="source" name="college" class="validate">
      		<option value="" disabled selected>Select College</option>
      		<option value="Aditya Engineering College" >Aditya Engineering College</option>
      		<option value="Sri Sai Aditya College of Engineering and Technology" >Sri Sai Aditya College of Engineering and Technology</option>
      		<option value="Sri Aditya College of Engineering" >Sri Aditya College of Engineering</option>
    	</select>
    	<label>College</label>
  	</div>
  	<div class="input-field col s12 m6">
      <i class="material-icons prefix">label</i>
    	<select id="status" name="branch" class="validate">
      		<option value="" disabled selected>Choose Branch</option>
		</select>
    	<label>Branch</label>
  	</div>
      <div style="text-align: center;">
      <br><br>
      <button class="btn-large waves-effect waves-red blue" id="subbtn">Submit</button>
      </div>
  	</form>
</div>

</center>
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
	  $(document).ready(function() {
    $('select').material_select();
  });
	  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 200 // Creates a dropdown of 15 years to control year
  });



	  $("#source").change(function() {
$('select').material_select('destroy');
    $('select').material_select();
$('select').material_select('destroy');
    $('select').material_select();

    var el = $(this) ;

    if(el.val() === "Aditya Engineering College" ) {
    $("#status").children("option").remove() ;
    $("#status").append("<option>CSE</option><option>ECE</option><option>EEE</option><option>MECHANICAL</option><option>CIVIL</option><option>MINING</option><option>AGRICULTURE</option><option>PETROLIUM</option>");
    $('select').material_select();

    }
    else if(el.val() === "Sri Sai Aditya College of Engineering and Technology" ) {
    $("#status").children("option").remove() ;
    $("#status").append("<option>CSE</option><option>ECE</option><option>EEE</option><option>MECHANICAL</option><option>CIVIL</option>");
    $('select').material_select();

    }
    else if(el.val() === "Sri Aditya College of Engineering" ) {
    $("#status").children("option").remove() ;
    $("#status").append("<option>CSE</option><option>ECE</option><option>EEE</option><option>MECHANICAL</option><option>CIVIL</option><option>PETROLIUM</option>");
    $('select').material_select();

    }
    else{
    $("#status").children("option").remove() ;
    $("#status").append("<option>Select any Option</option>");
    $('select').material_select();

    }
  });
</script>
<script type="text/javascript">
  $("#subbtn").click(function() {
    
    // Setup form validation on the #register-form element
    $("#regg").validate({
    
        // Specify the validation rules
        rules: {
            name: "required",
            email: "required",
            rollno: "required",
            mobno: "required",
            college: "required",
            branch: "required"
        },
        
        // Specify the validation error messages
        messages: {
            name: "please fill the name",
            email: "please fill the email",
            rollno: "please fill the rollno",
            mobno: "Please fill the mobno",
            college: "Select College",
            branch: "Select Branch"
        },
        
        submitHandler: function(form) {
      
            var url = "reg221.php"; // the script where you handle the form input.

      $.ajax({
        type: "POST",
        url: url,
        data: $("#regg").serialize(), // serializes the form's elements.
        success: function(data) {
          var tostcnt = data;
          Materialize.toast(data, 10000); // show response from the php script.
        }
         });

        return false; // avoid to execute the actual submit of the form.
    }
    });

  });

</script>
</body>
</html>