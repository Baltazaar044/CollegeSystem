<?php

@include 'db.ph';

session_start();
session_unset();
session_destroy();

header('location: login_form.php');

?>