<!Doctype html>
<html>
  <link href="details.css" type="text/css" rel="stylesheet">
  <body>
  <form method="post" action="mainpage.php"> 
  <aside float="right"><br><input type="Submit" name="submit" value="LOG OUT"></br></aside>
  <?php
  $servername = "localhost";
$username = "root";
$password = "";
$db_name="eventmanagement";
$conn = mysqli_connect($servername, $username, $password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else
{
	
	$id = $_POST["id"];
	$pwd = $_POST["pwd"];
	$s = "select * from owner o,hall h where o.ownerID =$id && h.ownerID=$id";
	$res = $conn->query($s);
	$r = $res->fetch_assoc();
	if($r["ownerpassword"]== $pwd){
		echo '<div class="form1"> <center> <h1>Your Hall and Caterer Details </h1> </center><div class="det"><form action="next form.html" method="get"> <h2>CHANGE HALL OR CATERER DETAILS<input type="submit" value="CHANGE DETAILS"></form></div>';
	echo "<aside>Welcome <b>".$r["ownerFirstName"]."!</b><aside>
	<br><b><p>First Name:  ".$r["ownerFirstName"]."</p></b></br>
 <br><b><p>Last Name:  ".$r["ownerLastName"]."</p></b></br>
 <br><b><p>Date of birth:  ".$r["ownerDOB"]."</p></b></br>
 <br><b><p>AGE:  ".$r["age"]."</p></b></br>
  <br><b><p>Hall ID :".$r["hallID"]."</p></b></br>
<br><b><p>Hall  Name   :  ".$r["hallName"]."</p></b></br>
  <br><b><p>Hall Capacity:  ".$r["hallcapacity"]."</p></b></br>

";

	}
	
   else
		echo '<center><h2>Password or username is wrong</h2></center>';
	
 
 
}




  
  ?>

  
  </body>
</html>