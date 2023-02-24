<?
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drop";

$conn = mysqli_connect($servername, $username, $password, $dbname);
echo " run";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>