<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Drop Down</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<h2 class="text-success">Dropdown</h2>
<form>
<label for="country">Country</label>
<select class="form-control" id="country-dropdown">
<option value="">Select Country</option>
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
$result = mysqli_query($conn,"SELECT * FROM countries");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
<?php
}
?>
</select>
<div class="form-group">
<label for="state">State</label>
<select class="form-control" id="state-dropdown">
</select>                        
<label for="city">City</label>
<select class="form-control" id="city-dropdown">
</select>
<script>
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
var country_id = this.value;
$.ajax({
url: "states-by-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state-dropdown").html(result);
$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#state-dropdown').on('change', function() {
var state_id = this.value;
$.ajax({
url: "cities-by-state.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#city-dropdown").html(result);
}
});
});
});
</script>
</body>
</html>