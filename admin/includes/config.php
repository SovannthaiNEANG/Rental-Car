<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'carrental';
$conn = mysqli_connect($localhost, $username, $password, $dbname);

if (!$conn) {
    echo 'game over';
}
