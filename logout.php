<?php

session_start();
session_destroy();
unset($_SESSION["username"]);
unset($_SESSION["firstName"]);
unset($_SESSION["lastName"]);
unset($_SESSION["gender"]);
unset($_SESSION["birthDate"]);
unset($_SESSION["email"]);


header('location: index.php');


?>