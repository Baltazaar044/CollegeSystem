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

	<div class="container" style="margin-top:30px">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
			<strong>Fill UserName and Upload PDF</strong>
				<form method="post" enctype="multipart/form-data">
					<?php
						// If submit button is clicked
						if (isset($_POST['submit']))
						{
						// get name from the form when submitted
						$name = $_SESSION['admin_name'];					
						$date = date("Y/m/d");
						if (isset($_FILES['pdf_file']['name']))
						{
						// If the ‘pdf_file’ field has an attachment
							$file_name = $_FILES['pdf_file']['name'];
							$file_tmp = $_FILES['pdf_file']['tmp_name'];
							
							// Move the uploaded pdf file into the pdf folder
							 move_uploaded_file($file_tmp,"./pdf/".$file_name);
							// Insert the submitted data from the form into the table
							$insertquery =
							"INSERT INTO uploads_data(name,filename,date) VALUES('$name','$file_name','$date')";
							
							// Execute insert query
							$iquery = mysqli_query($conn, $insertquery);	

								if ($iquery)
							{							
					?>											
								<div class=
								"alert alert-success alert-dismissible fade show text-center">
									<a class="close" data-dismiss="alert" aria-label="close">
									×
									</a>
									<strong>Success!</strong> Data submitted successfully.
								</div>
								<?php
								}
								else
								{
								?>
								<div class=
								"alert alert-danger alert-dismissible fade show text-center">
									<a class="close" data-dismiss="alert" aria-label="close">
									×
									</a>
									<strong>Failed!</strong> Try Again!
								</div>
								<?php
								}
							}
							else
							{
							?>
								<div class=
								"alert alert-danger alert-dismissible fade show text-center">
								<a class="close" data-dismiss="alert" aria-label="close">
									×
								</a>
								<strong>Failed!</strong> File must be uploaded in PDF format!
								</div>
							<?php
							}// end if
						}// end if
					?>
					
					<div class="form-input py-2">							
						<div class="form-group">
							<input type="file" name="pdf_file"
								class="form-control" accept=".pdf" required/>
						</div>
						<div class="form-group">
							<input type="submit"
								class="btnRegister" name="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>		
			
			<div class="col-lg-6 col-md-6 col-12">
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
						<tbody>
						<?php
							$selectQuery = "select * from uploads_data";
							$squery = mysqli_query($conn, $selectQuery);

							while (($result = mysqli_fetch_assoc($squery))) {
						?>
						<tr>
							<td><?php echo $result['name']; ?></td>
							<td><?php echo $result['filename']; ?></td>
							<td><?php echo $result['date']; ?></td>
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
        <!-- </footer>  -->
    </div>
</body>
</html>
