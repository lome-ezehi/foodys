<?php
$hostname = "localhost";

$username = "Lome";
$password = "oseijoyalome2";
$username_2 = "collins";
$password_2 = "1234";

$database = "recipes_db";

$db_connect = mysqli_connect($hostname, $username_2, $password_2, $database);
if ($db_connect) {
}else {
    echo "Failed" . mysqli_connect_error();
}
?>