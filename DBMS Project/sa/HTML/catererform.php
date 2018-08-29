<!Doctype html>
<html>
<?php
  $servername = "localhost";
$username = "root";
$password = "";
$db_name="eventmanagement";
$conn = mysqli_connect($servername, $username, $password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

  <link href="owner form.css" type="text/css" rel="stylesheet">
  <body>
  <div class="form1">
  <center>
  <h1>Caterer Details</h1>
  <form action="thanks.php" method="POST">
<b>Caterer Name </b><input type="text" name="caterername" placeholder="caterer name"><br><br>
<b>Address   </b><input type="text" name="address" placeholder="address"><br><br>
<b>Locality    </b><input type="text" name="locality" placeholder="locality"><br><br>
<b>Cost  </b><input type="text" name="cost" placeholder="cost"><br><br>
<b>Rating </b><input type="text" name="rating" placeholder="Rating"><br><br>
<b>contact </b><input type="number" name="contact" placeholder="contact"><br><br>
<input type="submit" name="submit-cat" value="Submit">
</form>
</div>
</center>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-weight:bold;
	}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: yellow;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
	font-weight:bold;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</body>
</html>