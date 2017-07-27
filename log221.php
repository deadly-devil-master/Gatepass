<?php
$rollno = $_POST["rollno"];
$pass = $_POST["pass"];

						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "gatepass";
					
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						$sql = "Select * from users where rollno = '$rollno' && password =  '$pass'";
						$result = mysqli_query($conn,$sql);
						if ($result == true) {

							if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$logfname = $row["name"];
        $logemail = $row["email"];
        $logpass = $row["password"];

    }

    if($pass==$logpass) {
    							$name = $row["name"];
    							echo "Hai $logfname";
    }
    else {
    echo '<script type="text/javascript">alert("check email and password")</script>';
    }

}

						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}

$conn->close();
?>