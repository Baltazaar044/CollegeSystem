<?php
require_once("DBConnection.php");
session_start();

$reasonErr = $absenceErr = "";
$leaveApplicationValidate = true;
if(isset($_POST['submit'])){
    $reason = $_POST['reason'];
    if(empty($reason)){
      $reasonErr = "Announcement cant be empty";
      $leaveApplicationValidate = false;
    }
    $date = date("Y/m/d");
    
    if($leaveApplicationValidate){
        $query = "INSERT INTO notification(user,Announcements, date) VALUES('".$_SESSION['admin_name']."','".$reason."', '".$date."')";
        $execute = mysqli_query($conn,$query);
        if($execute){
            echo '<script>alert("Done!")</script>';
        }
        else{
            echo "Query Error : " . $query . "<br>" . mysqli_error($conn);;
        }
    }
    
  }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/announcement.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav>
        <div class="logo">Menon</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li>Welcome, <?php echo $_SESSION['admin_name']; ?></li>
        </ul>
    </nav>
    <form method="POST">
    <div class="mb-3">
        
        <h1>Write a Announcement</h1>
        <span class="error"><?php echo "&nbsp;".$reasonErr ?></span>
        <textarea class="form-control" name="reason" id="leaveDesc" rows="6" placeholder="Enter Here..."></textarea>
        </div>
        <input type="submit" name="submit" value="Post" class="btn btn-success">
    </from>
    <!-- <footer id="colophon" class="site-footer" role="contentinfo"> -->
    <!-- <div class="social-menu">
        <ul>
            <li><a href="" target="blank"><i class="fab fa-github"></i></i></a></li>
            <li><a href="" target="blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href=""><i class="fab fa-codepen" target="blank"></i></a></li>
        </ul> -->
        <!-- </footer>  -->

</body>

</html>