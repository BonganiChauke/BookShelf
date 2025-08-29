<!-- database connection -->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "bookstore_db";
$port = "3306";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>