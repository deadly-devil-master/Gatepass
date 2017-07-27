
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
<div id="modal1" class="modal">
    <div class="modal-content">
      <center><h4 class="blue-text">Request for Out</h4></center>
      <p>From</p>
     	<div class="input-field col s6">
          <input id="Email" placeholder="Enter Time" name="email" type="time" class="validate">
        </div>
       <p>To</p>
     	<div class="input-field col s6">
          <input id="Email" placeholder="Enter Time" name="email" type="time" class="validate">
        </div>
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Enter the Reason</label>
        </div>
        <br><br>
        <div class="center">
      <button class="btn-large waves-effect waves-red blue" id="subbtn">Submit</button>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
<center>
<div style="padding: 10px;">
	<br>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.qrcode.js"></script>
<script type="text/javascript" src="js/qrcode.js"></script>



 <div class="row">
    <div class="col s12">
      <ul class="tabs tabs-fixed-width">
        <li class="tab col s3"><a class="active" href="#test1">Pending</a></li>
        <li class="tab col s3"><a href="#test2">Approved</a></li>
        <li class="tab col s3"><a href="#test4">Rejected</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    <table style="width: 100%;" class="highlight responsive-table">
        <thead >
       	  <tr>
       	  	<th>
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
if(!isset($_SESSION['rollno']) && !isset($_SESSION['password']))
{
  header('Location:index.php');   
}

else
{
	echo $_SESSION["rollno"];

}

?></h4></center></th>
			<th><!-- <a id="model1" class="btn right waves-effect waves-blue" href="#modal1">Request</a> --></th>
       	  	
       	  </tr>
          <tr class="blue">
              <th data-field="rollno">Roll No</th>
              <th data-field="id">Reason</th>
              <th data-field="name">Date and Time</th>
              <th cellspacing="100%!important;" data-field="price">Approve or Reject</th>
          </tr>
        </thead>

        <tbody id="rewww">
        <?php 

          $i=1;
        $strSQL = "SELECT * FROM report WHERE status LIKE '3' && college LIKE '".$_SESSION['college']."' && branch LIKE '".$_SESSION['branch']."'" or die(mysql_error($conn));
            $rs = mysqli_query($conn, $strSQL);
            while($row = mysqli_fetch_array($rs)) {
              $status=$row['status'];
        echo '<tr><td>'.$row["rollno"].'</td><td>'.$row['subject']. '</td><td>'; if($status==1) {echo "Approved";} elseif($status==2) {echo "Rejected";}else{echo $row['date'],$row['time'];} echo '</td><td width="30%;">';

        	echo '<button style="width:45%;padding:0px;font-size:10px;" class="btn" href="approve.php" id="approve'.$row['id'].'">Aprv</button> ';
        	echo '<button style="width:45%;padding:0px;font-size:10px;" class="btn" href="reject.php" id="reject'.$row['id'].'">Reject</button>';
?>
<script>
$("#approve<?php echo $row['id']; ?>").click(function() {
    var id = <?php echo $row['id']; ?>;
    $.ajax({   
        type: "post",
        url: "approve.php",
       // add json datatype to get json
     data: ({id: <?php echo $row['id']; ?>}),                  
        success: function(response){         
          $("#rewww").html(response);  
          /*Materialize.toast(response, 10000);*/

        }
    });
});
</script>
<script>
$("#reject<?php echo $row['id']; ?>").click(function() {
    var id = <?php echo $row['id']; ?>;
    $.ajax({   
        type: "post",
        url: "reject.php", // add json datatype to get json
     data: ({id: <?php echo $row['id']; ?>}),                  
        success: function(response){           
          $("#rewww").html(response);
          /*Materialize.toast(response, 10000);*/

        }
    });
});
</script>
<?php
  		echo  '</td></tr>';
      $i++;
      } 
      ?>
   
        </tbody>
      </table></div>
    <div id="test2" class="col s12">
    	<table style="width: 100%;" class="highlight responsive-table">
        <thead >
       	  <tr>
       	  	<th>
       	  		<center><h4 class="blue-text">
<?php echo $_SESSION["rollno"];?>
    
  </h4></center></th>
			<th><!-- <a id="model1" class="btn right waves-effect waves-blue hide" style="display: none;" href="#modal1">Request</a> --></th>
       	  	
       	  </tr>
          <tr class="blue">
              <th data-field="rollno">Roll No</th>
              <th data-field="id">Status</th>
              <th data-field="name">Date and Time</th>
          </tr>
        </thead>

        <tbody>
                <?php 

        $strSQL = "SELECT * FROM report WHERE status LIKE '1' && college LIKE '".$_SESSION['college']."'" or die(mysql_error($conn));
            $rs = mysqli_query($conn, $strSQL);
            while($row = mysqli_fetch_array($rs)) {
              $status=$row['status'];
        echo '<tr><td>'.$_SESSION["rollno"].'</td><td>'.$row['subject']. '</td><td>'; if($status==1) {echo "Approved";} elseif($status==2) {echo "Rejected";}else{echo $row['date'],$row['time'];} echo '</td></tr>';} ?>
        </tbody>
      </table>

    </div>
    <div id="test4" class="col s12">
    	
    	<table style="width: 100%;" class="highlight responsive-table">
        <thead >
       	  <tr>
       	  	<th>
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
if(!isset($_SESSION['rollno']) && !isset($_SESSION['password']))
{
  header('Location:index.php');   
}

else
{
	echo $_SESSION["rollno"];

}

?></h4></center></th>
			<th><!-- <a id="model1" class="btn right waves-effect waves-blue" href="#modal1">Request</a> --></th>
       	  	
       	  </tr>
          <tr class="blue">
              <th data-field="rollno">Roll No</th>
              <th data-field="id">Status</th>
              <th data-field="name">Date and Time</th>
          </tr>
        </thead>

        <tbody>
                <?php 

        $strSQL = "SELECT * FROM report WHERE status LIKE '2' && college LIKE '".$_SESSION['college']."'" or die(mysql_error($conn));
            $rs = mysqli_query($conn, $strSQL);
            while($row = mysqli_fetch_array($rs)) {
              $status=$row['status'];
        echo '<tr><td>'.$_SESSION["rollno"].'</td><td>'.$row['subject']. '</td><td>'; if($status==1) {echo "Rejected";} elseif($status==2) {echo "Rejected";}else{echo $row['date'],$row['time'];} echo '</td></tr>';} ?>
        </tbody>
      </table>

    </div>
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