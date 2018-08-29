<?php
$conn_error="could not connect";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$db_name="eventmanagement";
$conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
echo "Connected successfully";
}
?>