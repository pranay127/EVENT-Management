<!Doctype html>
<html>
  <link href="owner form.css" type="text/css" rel="stylesheet">
 
  <body background-color="gray">
  <div class="form1">
	<center>
		<form action="nextpage.php" method="POST">
                        <b>First Name  </b><input type="text" name="name" id="name" placeholder="your first name"><br><br>
                        <b>Last Name   </b><input type="text" name="lastname" id="lastname" placeholder="your last name"><br><br>
                        <b>DOB         </b><input type="date" name="dob" id="dob" placeholder="your dob"><br><br>
						<b>Age         </b><input type="text" name="age" id="age" placeholder="your age"><br><br>
						<b>Password</b><input type="text" name="password" id="password"><br><br>
						<input type="submit" name="submit" id="submit" value="Submit">
		
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
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: blue;
    padding: 14px 20px;
    margin: 8px 0;
    border:2px;
    border-radius: 4px;
    cursor: pointer;
	font-size:30px;
	font-weight:bold;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</body>
</html>