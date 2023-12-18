<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Feedback Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">

 

nav {
	background-color: #335eea;
}
 
nav .logo{ 
  text-align:center;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}

nav ul {
	padding: 0;
    margin: 0;
	list-style: none;
	position: relative;
	}
	
nav ul li {
  padding-right:10px;
  float:right;
	display:inline-block;
	background-color: #E64A19;
	}
 
nav a {
	display:block;
	padding:0 10px;	
	color:white;
	font-size:20px;
	line-height: 60px;
	text-decoration:none;
}
 
nav a:hover { 
    color: #fff;
}

nav ul ul li {
  text-align:center;
	width:156px;
	float:none;
	display:list-item;
	position: relative;
}
li > h5:after { content:  ' '; }
li > h5:only-child:after { content: ''; }

/* Hide Dropdowns by Default */
nav ul ul {
	display: none;
	position: absolute; }
	
/* Display Dropdowns on Hover */
nav ul li:hover > ul {
	display:inherit;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});

</script>
</head>
<body>
<nav>
    <div class="logo">WeCare</div>
  
    <ul>
              <li><h5>Welcome, <span><?php echo $_SESSION['user_name'] ?></span>!</h5>
               <ul>
               <li><a href="https://localhost/loginSystem/logout.php">Logout</a></li>
             
    </ul>
</li>

</nav>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
  <br>
<h2 class="pull-left">Feedback</h2>
</div>


<?php
include_once "db.php";

$result = mysqli_query($conn,"SELECT * FROM contact");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div style="overflow-x:auto;">
<table class='table table-bordered table-striped'>
<tr>
<td><h5>Name</h5></td>
<td><h5>Email id</h5></td>
<td><h5>Mobile</h5></td>
<td><h5>Subject</h5></td>
<td><h5>Message</h5></td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["telephone"]; ?></td>
<td><?php echo $row["subject"]; ?></td>
<td><?php echo $row["message"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
</body>
</html>