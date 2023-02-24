<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drop";

$conn = mysqli_connect($servername, $username, $password, $dbname);
echo " run";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// require_once "db.php";
// include "db.php";
$country_id = $_POST["country_id"];
$result = mysqli_query($conn,"SELECT * FROM states where country_id = $country_id");
?>
<option value="">Select State</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
?>