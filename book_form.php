<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(mysqli_connect_errno()){
      die('Database Connection failed'.mysqli_connect_error());
   }
  

?>


<?php
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $request = " insert into book_form values('{$name}','{$email}','{$phone}','{$address}','{$location}','{$guests}','{$arrivals}','{$leaving}') ";
      $result=mysqli_query($connection, $request);

      
if($result){
  
   header("location: index.php");
}else{
   printf("Error message: %s\n", $mysqli->error);
}


?>


<?php
//Email
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $to ='travelbeesl2022@gmail.com';
   $mail_subject='Message from Travel Bee';
   $email_body="Message from booking of the website";
   $email_body="<br>From: </b> {$name}<br>";
   $email_body="<br>From: </b> {$email}<br>";
   $email_body="<b>Message: </b></br>".nl2br(strip_tags($name));

   $header = "From: {$email}\r\nContent Type: text/html;";
   $check=mail($to,$mail_subject,$email_body,$header);

   if($check){
      header("location: index.php");
   }
   else
   {
   echo "Message is not sent";
   }
 ?>



   
 



