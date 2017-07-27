<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gatepass";
          
session_start();

$name = $_SESSION['name'];
$rollno = $_SESSION['rollno'];
$college = $_SESSION['college'];
$branch = $_SESSION['branch'];

            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
$id     = $_POST["id"];
$id     = intval($id);
$query  = "UPDATE `report` SET `status`=1 WHERE id LIKE $id";
$result = mysqli_query($conn, $query) or die('jaffa');


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
	echo "<script>Materialize.toast(\"Successfully Submitted\", 10000);</script>";					

      ?>
