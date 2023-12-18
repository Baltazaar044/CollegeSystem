<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/admindash.css">
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

   
    <!-- <section>
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo:700&display=swap" rel="stylesheet">

        <div class="cards">
         <div class="card card-1">
            <p>
                Leave Management
            </p>
            <h2>
                <a href="http://localhost/loginSystem/leave_panel.php">Leave Management</a>
                
            </h2>
        </div>

        <div class="card card-2">
            <p>
                User Management
            </p>
            <h2>
                <a href="http://localhost/loginSystem/list.php">Manage User</a>
            </h2>
        </div>

        <div class="card card-3">
            <p>
                Leave History
            </p>
            <h2>
            <a href="http://localhost/loginSystem/leave_history.php">Leave History</a>
            </h2>
        </div>

        <div class="card card-4">
            <p>
                Similar post
            </p>
            <h2>
                ADMS(Activities Document Management System)
            </h2>
        </div>

    </section> -->

 <button onclick="window.location.href='http://localhost:81/loginSystem/list.php';">Manage User</button>
<button onclick="window.location.href='http://localhost:81/loginSystem/leave_history.php';"style="--color:#f3738a;--border:2px;--slant:.5em">Leave History</button>
<button  onclick="window.location.href='http://localhost:81/loginSystem/leave_panel.php';" style="--color:#69db3a;--slant:40px;--border:8px">Leave Management</button>



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