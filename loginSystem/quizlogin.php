<?php
	require('DBConnection.php');
	session_start();
		
		$name = $_SESSION['admin_name'];					
		$str = "SELECT * FROM user_form WHERE name='$name'";
		$result = mysqli_query($conn,$str);
		if((mysqli_num_rows($result))<1)
		{
			echo "<center><h3><script>alert('Sorry.. Wrong Username (or) Password');</script></h3></center>";
			header("refresh:0;url=login_form.php");
		}
		else
		{
			$row=mysqli_fetch_array($result);
			if($row[4]=="Student"){
				$_SESSION['logged']=$name;
				$_SESSION['name']=$row[1];
				$_SESSION['id']=$row[0];
				$_SESSION['email']=$row[2];
				$_SESSION['password']=$row[3];
				header('location: quizWelcome.php?q=1'); 
			}
			else if (($row[4]=="Teacher")||($row[4]=="Admin")){
				session_start();
				
				$_SESSION["name"] = 'Admin';
				$_SESSION["key"] ='admin';
				$_SESSION["email"] = $row[2];
				header("location:quizDashboard.php?q=0");

			}					
        }
	
?>

