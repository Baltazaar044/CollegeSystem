<?php

require_once("DBConnection.php");
session_start();

if(!isset($_SESSION["admin_name"])){
	header("Location: login_form.php");
  }
else{

$id = $_GET['id'];
$descr = $_GET['descr'];

$add_to_db = mysqli_query($conn,"UPDATE leaves SET status='Rejected' WHERE id='".$id."' AND descr='".$descr."'");
	
			if($add_to_db){	
			  echo "Saved!!";
			  header("Location:leave_panel.php");
			}
			else{
			  echo "Query Error : " . "UPDATE leaves SET status='Rejected' WHERE id='".$id."' AND descr='".$desc."'" . "<br>" . mysqli_error($conn);
			}
	}

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
		 
?>

