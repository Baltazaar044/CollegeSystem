<?php
require_once("DBConnection.php");
session_start();
                                     
if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $deleteQuery="DELETE FROM user_form WHERE id=$id"; 
    mysqli_query($conn, $deleteQuery);

    echo "<script>window.location = 'list.php';</script>";
} else {
    echo "ERROR!";
}

?>