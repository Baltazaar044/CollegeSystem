<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/docUploads.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav>
        <div class="logo">Menon</div>
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li>Welcome, <?php echo $_SESSION['admin_name']; ?></li>
        </ul>
    </nav>

    
    <div class="drop_box">
      <header>
        <h4>Select File here</h4>
      </header>
      <p>Files Supported: PDF, TEXT, DOC , DOCX</p>
      <input type="file" hidden accept=".doc,.docx,.pdf" id="fileID" style="display:none;">
      <button class="btn">Choose File</button>
    </div>
    <script src="js/docUploads.js"></script>

    <div class="social-menu">
        <ul>
            <li><a href="" target="blank"><i class="fab fa-github"></i></i></a></li>
            <li><a href="" target="blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href=""><i class="fab fa-codepen" target="blank"></i></a></li>
        </ul>
        <!-- </footer>  -->
    </div>
</body>

</html>