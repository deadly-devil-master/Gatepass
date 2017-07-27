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
$id     = $_POST["id"];
$id     = intval($id);
$query  = "UPDATE `report` SET `status`=2 WHERE id LIKE $id";
$result = mysqli_query($conn, $query) or die('jaffa');
echo "Rejected Successfully";
?>