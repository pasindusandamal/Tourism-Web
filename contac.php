
<?php
$connection = mysqli_connect('localhost','root','','book_db');
if(mysqli_connect_errno()){
   die('Database Connection failed'.mysqli_connect_error());
}
?>


<?php  
      $email = $_POST['email'];
      $name = $_POST['name'];
      $number = $_POST['number'];
      $message = $_POST['subject'];
    
      $request = " insert into contac_form values('{$email}','{$name}','{$number}','{$massage}') ";
      $result=mysqli_query($connection, $request);

      
if($result){
  
  header("location: index.php");
}else{
   printf("Error message: %s\n", $mysqli->error);
}
?>


<?php

  $email= $_POST['email'];
  $fname = $_POST['name'];
  $country = $_POST['number'];
  $subject = $_POST['subject'];

   $to ='pasindu1525@gmail.com';
   $mail_subject='Message from Travel Bee';
   $email_body="Message from booking of the website";
   $email_body="Message:".nl2br(strip_tags($subject));

   $header = "From: {$email}\r\nContent Type: text/html;";
   $check=mail($to,$mail_subject,$email_body,$header);

 if($check){
  header("location: index.php");
 }else{
   echo "Message is not sent";
 }

 ?>