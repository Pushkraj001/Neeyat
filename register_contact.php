<?php

include ("db_connect.php") ;



     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
     $insert = mysqli_query($connect, "INSERT INTO contact (name, email, message) VALUES ('$name','$email' , '$message' )");


     if($insert) {
      header('location: Thanks.html');
    }
    else{
      echo ' 
   <script>
      alert("Password and Confirm Password does not match");
      window.location = "mentor registration.html";
   </script>  '
   ;      

    }

?>