
<Doctype! HTML></Doctype!>
<html>
<head>
<link href="css/main.css" rel="stylesheet">
<Title>Hall Search</Title><?php

       $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name="eventmanagement";
        $conn = new mysqli($servername, $username, $password,$db_name);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $name=$_POST['name'];
    

        $lastname=$_POST['lastname'];
        
       $email=$_POST['contact'];
       
$s ="INSERT INTO user(FirstName,LastName,EmailID) VALUES ('$name','$lastname','$email')";
    $conn->query($s);
  
   
       $search=$_POST['search'];
       $flag=$_POST['search1'];
       if($flag=="Yes"){
       $sql="select hallID,hallName,contactNo,hallcapacity,Rating,Address,Rent,Type,CateringCost from hall  where Locality LIKE '%$search%' && HasCatering=1";
       $result=$conn->query($sql);
       if ($result->num_rows > 0) {
         echo "<table class=\" table table-striped\"><tr><th>Hall ID</th><th>Hall Name</th><th>Contact No</th><th>Hall Capacity</th><th>Hall Address</th><th>Hall Rating</th><th>Rent</th><th>Type</th><th>Catering Cost</th></tr>";
        while($row = $result->fetch_assoc()) {
            
        echo "<tr><td>" . $row["hallID"]. "</td><td>" . $row["hallName"]. "</td><td>" . $row["contactNo"]. "</td><td>" . $row["hallcapacity"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["Rating"]. "</td><td>" . $row["Rent"]. "</td><td>" . $row["Type"]. "</td><td>" . $row["CateringCost"]. "</td></tr>";

                                            }
       }
       else
       {
        echo "<h3 style=\"text-align:center\">No recent entries here!!</h3>";
       }
}
if($flag=="No"){
       $sql="select hallID,hallName,contactNo,hallcapacity,Rating,Address,Rent,Type,CateringCost from hall  where Locality LIKE '%$search%' && HasCatering=0";
       $result=$conn->query($sql);
       if ($result->num_rows > 0) {
         echo "<table class=\" table table-striped\"><tr><th>Hall ID</th><th>Hall Name</th><th>Contact No</th><th>Hall Capacity</th><th>Hall Address</th><th>Hall Rating</th><th>Rent</th><th>Type</th></tr>";
        while($row = $result->fetch_assoc()) {
            
        echo "<tr><td>" . $row["hallID"]. "</td><td>" . $row["hallName"]. "</td><td>" . $row["contactNo"]. "</td><td>" . $row["hallcapacity"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["Rating"]. "</td><td>" . $row["Rent"]. "</td><td>" . $row["Type"]. "</td></tr>";

                                            }
       }
       else
       {
        echo "<h3 style=\"text-align:center\">No recent entries here!!</h3>";
       }
}
?>  
</head>
<body>
   <link href="details.css" type="text/css" rel="stylesheet">
   
</body>
</html>