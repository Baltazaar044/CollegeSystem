<?php
$conn = mysqli_connect("localhost", "root", "", "imuser_db") or die(mysqli_error());
session_start();
$sql = "SELECT * FROM notification ORDER BY date;";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html>
<head>
<title>Marquee Link in PHP | SoftAOX</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
<link rel="stylesheet" href="marquee.css">
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
    <h1>Notifications</h1>
<div class="mar">

<marquee behavior="scroll" direction="up" onMouseOver="this.stop();" onMouseOut="this.start();">
<?php
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
 echo '🍁<label style="font-size: 1.5vw; color: #212121;">'.$row['Announcements'].' '.$row['date'].'</label> </br></br> ';
 }
}
?>
</marquee>
</div>
</body>
</html>

<!-- height:200px;margin-left:550px;margin-top:180px;padding:30px; -->