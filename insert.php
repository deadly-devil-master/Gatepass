<?php
session_start();
$name = $_SESSION['name'];
$rollno = $_SESSION['rollno'];
$college = $_SESSION['college'];
$branch = $_SESSION['branch'];
$date = $_POST['date'];
$time = $_POST['time'];
$subject = $_POST['subject'];
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "gatepass";
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						$sql = "INSERT INTO report (`name`, `rollno`, `college`, `branch`, `date`, `time`, `subject`) VALUES (' ".$name."','".$rollno."','".$college."','".$branch."','".$date."','".$time."','".$subject."')";
						$result = $conn->query($sql) or die('query error');
						if ($result === TRUE) {
							echo "Submitted Successful";
							$strSQL = "SELECT * FROM report WHERE rollno LIKE '".$_SESSION['rollno']."'" or die(mysql_error($conn));
            $rs = mysqli_query($conn, $strSQL);
            $i=34;
            while($row = mysqli_fetch_array($rs)) {
               /* echo "\t<table><tr><td>".$row['subject']."</td><td>".$row['date']."</td><td>".$row['time']."</td><td><button href='#'>".$row['rollno'].$row['date'].$row['time']."</button></td></tr></table>\n";*/
$status=$row['status'];
echo '<tr><td>Reason:- '.$row['subject']." Time :-".$row['date'],$row['time'].'</td><td>'; if($status==1) {echo "Approved";} elseif($status==2) {echo "Rejected";}else{echo "Pending";} echo '</td><td>';

               if($status==1) {
        	echo '<a id="moda" href="#modal'.$i.'" class="btn btn-small waves-effect waves-blue" >Download</a>';

        	echo '<div id="modal'.$i.'"class="modal">
    <div class="modal-content">
      <center><h4 class="blue-text">Download the QR code</h4>
<div id="qrcodeCanvs'.$i.'"></div></center>
      
    </div>
    <div class="modal-footer">
      <a href="#!"  class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>';
  $rdef="#qrcodeCanvs".$i."";
  $nth= "".$row['date'].$row['time']."";
  echo "<script type=\"text/javascript\">jQuery('$rdef').qrcode({text : \"".$_SESSION['rollno'].$nth."\"});</script>";	


        } 
        elseif($status==2) {
        	echo '<button class="btn btn-small waves-effect waves-blue" >Reason</button>';
        }
        else {
        	echo '<button class="btn disabled" >Download</button>';
        }

  		echo  '</td></tr>';
      $i++;
						}
	echo "<script>Materialize.toast(\"Successfully Submitted\", 10000);</script>";					
	$conn->close();
}
?>