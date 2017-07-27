<?php
$name = $_POST["name"];
$email = $_POST["email"];
$rollno = $_POST["rollno"];
$mobno = $_POST["mobno"];
$college = $_POST["college"];
$branch = $_POST["branch"];
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
						$sql = "Insert into users values ('".$name."','".$email."','".$rollno."','1','".$mobno."','".$college."','".$branch."','".$pass."')";
						$result = $conn->query($sql);
						if ($result === TRUE) {
							echo "Register Successfull";
						} else {
							echo "User already Exist";
						}

$conn->close();
?>