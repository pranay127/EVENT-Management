<!Doctype html>
<body background-color="yellow">
<center><div><form action="nextform.php" method="POST">
                <b>Owner ID </b><input type="number" min="1000" max="9999" name="oid" id="oid" placeholder="Your ID is"><br>

<input type="submit" value="Register hall">
</form>
<form action=" catererform.php" method="POST">
                                   <b>Owner ID </b><input type="number" min="1000" max="9999" name="oid" id="oid" placeholder="Your ID is"><br>

                    <input type="submit" value="Register Caterer">
</form>
</div>
</center>
<style>


input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: blue;
    padding: 14px 20px;
    margin: 8px 0;
    border:2px;
    border-radius: 4px;
    cursor: pointer;
	font-size:30px;
	font-weight:bold;
	float:center;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 0px;
}
</style>
</body>
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
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $password=$_POST["password"];
    $dob=$_POST["dob"];
    $age=$_POST["age"];
    $s ="INSERT INTO owner(ownerFirstName,ownerLastName,ownerpassword,ownerDOB,age) VALUES ('$name','$lastname','$password','$dob','$age')";
    $conn->query($s);
    $s1="SELECT ownerID from owner ORDER BY ownerID DESC limit 1";
    $res=$conn->query($s1);
    $row=$res->fetch_assoc();
    $num=$row["ownerID"];
    echo "Your ID Number is: ";
    echo ($num);
    
    
    if($conn->query($s) == FALSE)
{
    echo("<h4 id=\"register\" style=\"text-align:center;color:green\">User already registered! </h4>");
}
}
?>
