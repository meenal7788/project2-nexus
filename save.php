<?php 
  $name=$_POST["name"];
  $email=$_POST["email"];
  $subject=$_POST["subject"];
  $feedback=$_POST["feedback"];
  $conn = mysqli_connect("sql101.infinityfree.com", "if0_35927870", "cvjyLHNYQk", "if0_35927870_database_form") or die("connection fail");
  
  $sql ="INSERT INTO database_table(Name, Email, Subject, Feedback) 
  VALUES('{$name}','{$email}','{$subject}','{$feedback}')";
  $result = mysqli_query($conn, $sql) or die("Query Fail");
  header("location: http://meenalnale.free.nf/#contact");
  mysqli_close($conn);
?>