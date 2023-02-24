<?php
// require_once "db.php";
// include "db.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drop";

$conn = mysqli_connect($servername, $username, $password, $dbname);
echo " run";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$state_id = $_POST["state_id"];
$result = mysqli_query($conn,"SELECT * FROM cities where state_id = $state_id");
?>
<option value="">Select City</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
?>