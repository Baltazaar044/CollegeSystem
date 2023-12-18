<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $telephone = $_POST['telephone'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 // Database connection
 include_once 'db.php';
 if($conn->connect_error){
 echo "$conn->connect_error";
 die("Connection Failed : ". $conn->connect_error);
 } else {
 $stmt = $conn->prepare("insert into contact(name,email,telephone,subject,message) values(?, ?, ?, ?, ?)");
 $stmt->bind_param("sssss", $name ,$email ,$telephone,$subject ,$message);
 $execval = $stmt->execute();
 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted');
    window.location.href='http://127.0.0.1:5501/html/index.html';
    </script>");
 $stmt->close();
 $conn->close();
 }
?>
