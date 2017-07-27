
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Gate Pass</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
      
      <a id="logo-container" style="" href="#" class="red-text text-darker-5 brand-logo">Gate Pass</a>
      <ul class="right ">
        <li class="cn"><a href="logout.php" class="red-text hvr-underline-from-center"><b>Logout</b></a></li>
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
<div style="padding: 10px;">
	<br>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.qrcode.js"></script>
<script type="text/javascript" src="js/qrcode.js"></script>



 <div class="row">
    <div id="test1" class="col s12">
    <table style="width: 100%;" class="highlight responsive-table">
        <thead>
       	  <tr>
       	  	<th >
       	  		<center><h4 class="blue-text">
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
if(!isset($_SESSION['rollno']) && !isset($_SESSION['password'])){
  header('Location:index.php');   
}else{
	echo $_SESSION["rollno"];
}
?></h4></center></th>
       	  </tr>
          <tr class="blue">
              <th data-field="rollno">Roll No</th>
              <th data-field="id">Date and Time of Permissions</th>
              <th cellspacing="100%!important;" data-field="price">Status</th>
          </tr>
        </thead>
        <tbody>
			<?php
      $i=355;
				$sa=mysqli_query($conn,"select * from report where status=1");
				while($ss=mysqli_fetch_array($sa)){
						echo '<tr><td>'.$ss['rollno'].'</td><td>'. $ss['date']." " . $ss['time']. '</td><td>';
						echo '<a id="moda" href="#modal'.$i.'" class="btn btn-small waves-effect waves-blue" >Download</a>';
						echo '<div id="modal'.$i.'" class="modal"><div class="modal-content">
							<center><h4 class="blue-text">Download the QR code</h4>
							<div id="qrcodeCanvs'.$i.'"></div></center>
							<div class="modal-footer"><a href="#!"  class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a></div>
						</div>';
            $rdef="#qrcodeCanvs".$i."";
            $nth= "".$ss['date'].$ss['time']."";
  echo "<script type=\"text/javascript\">jQuery('".$rdef."').qrcode({text : \"".$ss['rollno'].$nth."\"});</script>";  
	
					
      $i++;
        }
      echo  '</td></tr>';
			 ?>
        </tbody>
      </table></div>
</center>
</div></div></div>
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
      <div class="container">Made by <a class="brown-text text-lighten-3" style="cursor: wait;" href="#">Team</a>
      </div>
    </div>
  </footer>
<script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/validate.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
    $('#moda').modal('open');

</script>
<script type="text/javascript">
	jQuery('#qrcodeCanvas').qrcode({
		text	: "<?php echo $_SESSION["rollno"]; ?>"
	});	
</script>
</body>
</html>