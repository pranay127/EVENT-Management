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
    $caterername=$_POST["caterername"];
    echo $caterername;
    $address=$_POST["address"];
    echo $address;
    $locality=$_POST["locality"];
    echo $locality;
    $cost=$_POST["cost"];
    echo $cost;
    $contact=$_POST["contact"];
    echo $contact;
    $rating=$_POST["rating"];
    echo $rating;
    $s ="INSERT INTO caterer(caterername,address,rating,locality,cost,contact) VALUES('$caterername','$address','$rating','$locality','$cost','$contact')";
    $conn->query($s);
    
    if($conn->query($s) == FALSE)
{
    echo("<h4 id=\"register\" style=\"text-align:center;color:green\">User already registered! </h4>");
}

?>
<body>
  <link href="details.css" type="text/css" rel="stylesheet">
  <h1>Thanks for Registering Your Catering Serivice with us!</h1>
  <form method="post" action="mainpage.php"> 
  <br><input type="Submit" name="submit" value="GO TO HOMEPAGE"></br>
    </form>
   				
  </body>
  </html>