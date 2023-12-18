
<?php include 'DBConnection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href=
    "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/test.css">
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
        <!-- <div class="container" style="margin-top:30px">
            <div class="row"><div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Records from Database</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table styles="table, th, td{border: 1px solid;}">
                                <thead>
                                    <th>Name </th>
                                    <th>File Name</th>
                                    <th>Date </th>
                                </thead>
                                <tbody> -->
                                <?php
                                    $selectQuery = "select * from uploads_data";
                                    $squery = mysqli_query($conn, $selectQuery);

                                    while (($result = mysqli_fetch_assoc($squery))) {
                                ?>
                                <tr>
                                    <td><?php echo $result['name']; ?></td>
                                    <td><?php echo $result['filename']; ?></td>
                                    <td><?php echo $result['date']; ?></td>
                                    <td><a href="downloadpdf.js" id ="download" value = <?php echo $result['filename']; ?> ><i class="fa fa-download" ></i></a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>			
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-menu">
            <ul>
                <li><a href="" target="blank"><i class="fab fa-github"></i></i></a></li>
                <li><a href="" target="blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href=""><i class="fab fa-codepen" target="blank"></i></a></li>
            </ul>
        </div>
        
    </body>
</html>