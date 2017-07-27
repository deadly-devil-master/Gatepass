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
   $userid=$_POST['rollno'];
   $pswd=$_POST['pass'];

    $sql= "SELECT * FROM users where rollno like '$userid' and password = '$pswd'";

    $res=mysqli_query($conn,$sql);
    
    $num=  mysqli_num_rows($res); 
    
    
    
   if($num>0)  
{
    $row= mysqli_fetch_array($res); 
    
    $uid=$row['name'];
    
            
     if($row['rollno']==$userid) 
       {
         @session_start();
        
       $_SESSION['rollno']=$userid;
    
     $_SESSION['name']=$uid; // for next page
     $_SESSION['password']=$pswd;
     $_SESSION['college']=$row['college'];
     $_SESSION['branch']=$row['branch'];
               
               echo $row['Position'];
        //header('Location: dashboard.php');

       }

         else
         {
          // header('Location: index.php');
          echo "Roll no and Password are </b>CaseSensitive<b>";
         }
	   
}

else{
	
	
 
  echo "Wrong Credentials";


 
	
	
}
    

?>