<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/index.css">
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

    <section class="wrapper">
        <div class="container">
            <div class="grid-cols-2">
                <div class="grid-item-1">
                    <h1 class="main-heading">
                        Welcome to <span> V. K. Krishna Menon College, Bhandup </span>
                        <br />
                        “FROM DARKNESS TO LIGHT"
                    </h1>
                    <p class="info-text">
                        To mould the youth to love God, serve humanity and help them grow as competent individuals with
                        strength of character, courage of conviction imbued with qualities of head and heart
                    </p>
                    <div class="btn_wrapper">
                        <button class="btn view_more_btn"
                            onclick="window.location.href='https://localhost/loginsystem/resume_generator.php';">
                            resume generator<i class="ri-arrow-right-line"></i>
                        </button>
                        <button class="btn documentation_btn"
                            onclick="window.location.href='https://localhost/loginsystem/test2.php';">Calculator</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo:700&display=swap" rel="stylesheet">

        <div class="cards">
         <div class="card card-1">
            <p>
                Similar post
            </p>
            <h2>
                <a href="https://localhost/loginsystem/marquee.php">Notifications</a>
            </h2>
        </div>

        <div class="card card-2">
            <p>
                Similar post
            </p>
            <h2>
                <a href="https://localhost/loginsystem/leave.php">Apply for Leave</a>
            </h2>
        </div>

        <div class="card card-3">
            <p>
                Similar post
            </p>
            <h2>
                <a href="https://localhost/loginsystem/download.php">Question Paper Download</a>
            </h2>
        </div>

        <div class="card card-4">
            <p>
                Similar post
            </p>
            <h2>
            <a href="https://localhost/loginsystem/quizWelcome.php?q=1">Online Test</a>
            </h2>
        </div>

    </section>
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