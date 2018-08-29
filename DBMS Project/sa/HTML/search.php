<!Doctype html>

  <link href="details.css" type="text/css" rel="stylesheet">
<body background-color="gray">
<center><h1> YOUR SEARCH RESULTS!</h1></center>
<?php
  $servername = "localhost";
$username = "root";
$password = "";
$db_name="eventmanagement";
$conn = mysqli_connect($servername, $username, $password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["search"])){
    $FirstName=$_POST["FirstName"];
    $LastName=$_POST["LastName"];
    $emailID=$_POST["emailID"];
    $s ="INSERT INTO user(FirstName,LastName,emailID) VALUES ('$FirstName','$LastName','$emailID')";
    $conn->query($s);
    if($conn->query($s) == FALSE)
{
    echo("<h4 id=\"register\" style=\"text-align:center;color:green\">please enter your information </h4>");
}
}
?>
</body>
</html>
