<?php

require_once("DBConnection.php");

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM user_form WHERE user_type='Student'";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>