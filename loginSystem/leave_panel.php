<?php
require_once("DBConnection.php");
session_start();
if(!isset($_SESSION['admin_name'])){
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Panel</title>

    <style>
        h1 {
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
            padding-top: 1em;
        }

        .mycontainer {
            width: 90%;
            margin: 1.5rem auto;
            min-height: 60vh;
        }

        .mycontainer table {
            margin: 1.5rem auto;
        }
    </style>

</head>

<body>
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

    <h1>Admin Panel</h1>

    <div class="mycontainer">

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <th>#</th>
                    <th>Employee</th>
                    <th>Leave Application</th>
                    <th>Dates</th>
                    <th>Leave</th>
                    <th>Actions</th>
                    <!-- <th>Action</th> -->
                </thead>
                <tbody>
                        <!-- loading all leave applications from database -->
                        <?php
                                global $row;
                                $query = mysqli_query($conn,"SELECT * FROM leaves WHERE status='Pending'");
                                
                                $numrow = mysqli_num_rows($query);

                               if($query){
                                    
                                    if($numrow!=0){
                                         $cnt=1;

                                          while($row = mysqli_fetch_assoc($query)){
                                            $datetime1 = new DateTime($row['fromdate']);
                                            $datetime2 = new DateTime($row['todate']);
                                            $interval = $datetime1->diff($datetime2);
                                            
                                            echo "<tr>
                                                    
                                                    <td>$cnt</td>
                                                    <td>{$row['name']}</td>
                                                    <td>{$row['descr']}</td>
                                                    <td>{$datetime1->format('Y/m/d')} <b>--</b> {$datetime2->format('Y/m/d')}</td>
                                                    <td>{$interval->format('%a Day/s')}</td>
                                          
                                                    <td><a href=\"updateStatusAccept.php?id={$row['id']}&descr={$row['descr']}\"><button class='btn-success btn-sm' >Accept</button></a>
                                                    <a href=\"updateStatusReject.php?id={$row['id']}&descr={$row['descr']}\"><button class='btn-danger btn-sm' >Reject</button></a></td>
                                                  </tr>";  
                                         $cnt++; }       
                                    }
                                }
                                else{
                                    echo "Query Error : " . "SELECT * FROM leaves WHERE status='Pending'" . "<br>" . mysqli_error($conn);
                                }
                       ?> 
                    
                </tbody>
            </table>
    </div>

    <footer class="footer navbar navbar-expand-lg navbar-light bg-light" style="color:white;">
    <div>
    <p class="text-center">&copy; <?php echo date("Y"); ?> -  Leave </p>
      <p class="text-center">DEEPAK </p>
    </div>
    </footer>
</body>

</html>

<?php
}

ini_set('display_errors', true);
error_reporting(E_ALL);
?>

<!-- <li class="nav-item">
            <button id="logout" onclick="window.location.href='logout.php';">Logout</button> </div>
            </li> -->