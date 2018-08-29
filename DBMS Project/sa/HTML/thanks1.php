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
    $hallname=$_POST["hallname"];
    $address=$_POST["address"];
    $locality=$_POST["locality"];
    $capacity=$_POST["capacity"];
    $rating=$_POST["Rating"];
    $s ="INSERT INTO hall(hallName,hallcapacity,Rating) VALUES ('$hallname','$capacity','$rating')";
    $conn->query($s);

    if($conn->query($s) == FALSE)
{
    echo("<h4 id=\"register\" style=\"text-align:center;color:green\">User already registered! </h4>");
}

?>
<?php
 $servername = "localhost";
$username = "root";
$password = "";
$db_name="eventmanagement";
$conn = mysqli_connect($servername, $username, $password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $hallname=$_POST["hallname"];
    $address=$_POST["address"];
    $locality=$_POST["locality"];
    $capacity=$_POST["capacity"];
    $rating=$_POST["Rating"];
    $Rent=$_POST["Rent"];
    $oid=$_POST["oid"];
    $s1="INSERT INTO hall(ownerID,hallname,address,locality,hallcapacity,Rating,Rent) VALUES ('$oid','$hallname','$address','$locality','$capacity','$rating','$Rent')";
    $conn->query($s1);

    if($conn->query($s1) == FALSE)
{
    echo("<h4 id=\"register\" style=\"text-align:center;color:green\">User already registered! </h4>");
}

?>
<body>
  <link href="details.css" type="text/css" rel="stylesheet">
  <h1>Thanks for Registering Your Event Hall with us!</h1>
  <form method="post" action="mainpage.php"> 
  <br><input type="Submit" name="submit" value="GO TO HOMEPAGE"></br>
    </form>
   				
  </body>
  </html>