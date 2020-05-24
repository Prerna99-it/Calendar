<?php

$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['psw'];


if(!empty($name) ||!empty($email) || !empty($password))
{
    $host= "localhost";
    $dbusername= "root";
    $dbpassword= "";
    $dbname= "register";
    
    $conn= new mysqli($host, $dbusername, $dbpassword, $dbname);
    
    if(mysqli_connect_error()){
        die('Connect error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT ="Select email from user where email=? Limit 1";
        $INSERT = "Insert into user (name, email, psw) values(?, ?, ?)";
        
        $stmt= $conn->prepare($SELECT);
         $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
       
        if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $name, $email, $password);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already registered using this email";
     }
     $stmt->close();
     $conn->close();
    }
    }

else{
    echo "All fields are needed";
    die();
    
}
        
















