<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="upload.css">
    <title>Files Upload and Download</title>
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
  <div class="container">
  <div class="card">
  <h3>Upload File</h3>
        <form action="upload.php" method="post" enctype="multipart/form-data" >
 
        <h4>Select File here</h4>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div> 

    <!-- <div class="container">
  <div class="card">
  <form action="upload.php" method="post" enctype="multipart/form-data" >
    <h3>Upload Files</h3>
    <div class="drop_box">
      <header>
        <h4>Select File here</h4>
      </header>
      <p>Files Supported: PDF, TEXT, DOC , DOCX</p>
      <input type="file" name="myfile">
      <button class="btn">Choose File</button>
      <button type="submit" name="save">upload</button>
    </div>
    </form>
  </div>
</div> -->
  </body>
</html>