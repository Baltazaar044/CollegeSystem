<?php
require_once("DBConnection.php");
session_start();
global $row;
if(!isset($_SESSION["admin_name"])){
  header("Location: login_form.php");
}
else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Leave Application</title>
  <style>
    h1 {
      text-align: center;
      font-size: 2.5em;
      font-weight: bold;
      padding-top: 1em;
      margin: -1.5rem auto;
    }

    form {
      padding: 40px;
      margin: -3rem auto;
    }

    input,
    textarea {
      margin: 5px;
      font-size: 1.1em !important;
      outline: none;
    }

    label {
      margin-top: 2em;
      font-size: 1.1em !important;
    }

    label.form-check-label {
      margin-top: 0px;
    }

    #err {
      display: none;
      padding: 1.5em;
      padding-left: 4em;
      font-size: 1.2em;
      font-weight: bold;
      margin-top: 1em;
    }

    table{
      width: 120% !important;
      margin: 1.5rem auto !important;
      font-size: 1.1em !important;
    }

    .error{
      color: #FF0000;
    }
  </style>


</head>

<body>
  <!--Navbar-->
  <nav>
        <div class="logo">Menon</div>
        <!-- <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label> -->
        <ul>
            <li>Welcome, <?php echo $_SESSION['admin_name']; ?></li>
            <li><button onclick="window.location.href='logout.php';" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button></li>
        </ul>
    </nav>


  <h1>My Leave History</h1>

  <div class="container">
  
    <div class="table-responsive">
    
      <table class="table table-bordered table-hover table-striped">
          <thead>
              <th>#</th>
              <th>Leave Application</th>
              <th>From-Date</th>
              <th>To-Date</th>
              <th>Status</th>
          </thead>
          <tbody>
            <!-- loading all leave applications of the user -->
            <?php
                  $leaves = mysqli_query($conn,"SELECT * FROM leaves WHERE name='".$_SESSION['admin_name']."'");
                  if($leaves){
                    $numrow = mysqli_num_rows($leaves);
                    if($numrow!=0){
                      $cnt=1;
                      while($row1 = mysqli_fetch_array($leaves)){
                        echo "<tr>
                                <td>$cnt</td>
                                <td>{$row1['descr']}</td>
                                <td>{$row1['fromdate']}</td>
                                <td>{$row1['todate']}</td>
                                <td><b>{$row1['status']}</b></td>
                              </tr>";
                     $cnt++; }
                    } else {
                      echo"<tr class='text-center'><td colspan='12'><b>YOU DON'T HAVE ANY LEAVE HISTORY! PLEASE APPLY TO VIEW YOUR STATUS HERE!</b></td></tr>";
                    }
                  }
                  else{
                    echo "Query Error : " . "SELECT descr,status FROM leaves WHERE name='".$_SESSION['admin_name']."'" . "<br>" . mysqli_error($conn);;
                  }
              ?>
          </tbody>
      </table>
  </div>
  </div>

  

</body>

</html>

<?php
}

ini_set('display_errors', true);
error_reporting(E_ALL);
?>