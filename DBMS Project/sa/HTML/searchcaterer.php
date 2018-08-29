<Doctype! HTML></Doctype!>
<html>
<head>


<Title>Caterer Search</Title>
<?php

       $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name="eventmanagement";
        $conn = new mysqli($servername, $username, $password,$db_name);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
       $search=$_POST['search1'];
       $sql="select c.catererID,c.caterername, c.contact,c.cost,c.address from caterer c where c.locality LIKE '%$search%'";
       $result=$conn->query($sql);
       if ($result->num_rows > 0) {
        echo "<table class=\" table table-striped\"><tr><th>Caterer ID</th><th>Caterer Name</th><th>Contact No</th><th>Caterer cost(per meal)</th><th>Hall Address</th></tr>";
        while($row = $result->fetch_assoc()) {
            
        echo "<tr><td>" . $row["catererID"]. "</td><td>" . $row["caterername"]. "</td><td>" . $row["contact"]. "</td><td>" . $row["cost"]. "</td><td>" . $row["address"]. "</td></tr>";
                                            }
       }
       else
       {
        echo "<h3 style=\"text-align:center\">No recent entries here!!</h3>";
       }
   

?>  
</head>
<body>
<link href="details.css" type="text/css" rel="stylesheet">
   <CENTER><h1>YOUR SEARCH RESULTS!</h1></CENTER>
   
</body>
</html>