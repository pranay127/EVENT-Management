<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="eventmanagement";
$conn = new mysqli($servername, $username, $password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

    <head>
    	<title>Event</title>
		</head>
 	<link rel="stylesheet" type="text/css" href="mainpage.css">
	<center id="heading"><h1 > <font color="#F5F5F5">HALLS & CATERERS</font></h1></center>
	<div class = "im2">
   		<img src="10-indian-wedding.preview.jpg" height='220px' width='300px'>
   		<img src="IMG_7878.jpg" height='220px' width='300px'>
   		<img src="3.jpg" height='220px' width='300px'>
   		<img src="catering_services_92.jpg" height='220px' width='300px'>
   		<img src="67ac4d7c7eb342b9227daa998e4ee285.jpg" height='220px' width='280px'>
	</div>
	<div class="im3">
		<h3>Owners Portal<h3>
		<form method="POST" action="details.php">
			Login ID : <input type="text" name="id"><br>
			Password: <input type="text" name="pwd"><br>
			<input type="submit" value ="login"><br>
		    <a href="owner form.php">New Client?</a>
		</form>
	</div>
	<center>
  		<div class ="center">
    		<form method="post" action="searchhall.php"> 
   				
   				<b>First Name : </b><input type="text" name="name" id="name" placeholder="Your First Name"><br>
   				<br><b>Last Name  : </b><input type="text" name="lastname" id="lastname" placeholder="Last name"><br>
                <br><b>Email ID  : </b><input type="text" name="contact" id="contact" placeholder="Email Id"><br>
                
                <br><b>Hall : </b><select name="search">
                			<option value="Andheri">Andheri</option>
                      <option value="Bandra">Bandra</option>
                      <option value="Bhandup">Bhandup</option>
<option value="Byculla ">Byculla </option>
<option value="Charni Road">Charni Road </option>
<option value="Chowpatty "> Chowpatty </option>
<option value="Churchgate ">Churchgate </option>
<option value="Colaba "> Colaba </option>
<option value="Cotton Green "> Cotton Green</option>
<option value="Dadar ">Dadar</option>
<option value="Fort ">Fort</option>
<option value="Goregaon">Goregaon</option>
<option value="Grant Road ">Grant Road</option>
<option value="Jogeshwari">Jogeshwari</option>
<option value="Juhu"> Juhu</option>
<option value="Kandiwali">Kandiwali </option>
<option value="Khar ">Khar</option>
<option value="Lower Parel ">Lower Parel</option>
<option value="Mahalaxmi ">Mahalaxmi </option>
<option value=" Mahim ">Mahim</option>
<option value="Malad">Malad  </option>
<option value="Marine Drive">Marine Drive  </option>
<option value="Marine Lines">Marine Lines</option>
<option value="Matunga">Matunga</option>
<option value="Parel">Parel</option>
<option value="Prabhadevi ">Prabhadevi </option>
<option value="Sion">Sion</option>
<option value="Tardeo">Tardeo</option>
<option value="Vile Parle ">Vile Parle </option>
<option value="Worli">Worli</option>


                		   </select>
                       <br><b>Wants Hall with Catering Service? </b><select name="search1">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                		   <input type="Submit" name="submit-hall" value="GO!!">
                		   </form>
               <form method="post" action="searchcaterer.php"><br>
                <b>Caterer : </b><select name="search1">
                				<option value="Andheri">Andheri</option>
                        <option value="Bandra">Bandra</option>
                        <option value="Bhandup">Bhandup</option>
                        <option value="Bhayandar">Bhayandar</option>
                        <option value="Borivali">Borivali</option>
                        <option value="Byculla ">Byculla </option>
                        <option value="Chembur ">Chembur </option>
                        <option value="Chowpatty "> Chowpatty </option>
                        <option value="Colaba "> Colaba </option>
                        <option value="Dadar ">Dadar</option>
                        <option value="Dahanu Road"> Dahanu Road </option>
                        <option value="Fort ">Fort</option>
                        <option value="Ghatkopar"> Ghatkopar</option>
                        <option value="Girgaum ">Girgaum</option>
                        <option value="Goregaon">Goregaon</option>
                        <option value="Jogeshwari">Jogeshwari</option>
                        <option value="Kalaghoda">Kalaghoda</option>
                        <option value="Kalwa ">Kalwa </option>
                        <option value="Kalyan ">Kalyan  </option>
                        <option value="Kandivali">Kandivali </option>
                        <option value="Khar ">Khar</option>
                        <option value="Kharghar ">Kharghar  </option>
<option value="Kopar ">Kopar</option>
<option value="Kurla">Kurla</option>
<option value="Mahalaxmi ">Mahalaxmi </option>
<option value=" Mahim ">Mahim</option>
<option value="Malad">Malad  </option>
<option value="Marine Line ">Marine Line</option>
<option value="Masjid">Masjid</option>
<option value="Matunga">Matunga</option>
<option value="Mira Road">Mira Road</option>
<option value="Mulund">Mulund </option>
<option value="Nariman">Nariman</option>
<option value="Nariman Point ">Nariman Point </option>
<option value="Nerul">Nerul</option>
<option value="Panvel">Panvel</option>
<option value="Parel">Parel</option>
<option value="Powai">Powai</option>
<option value="Prabhadevi ">Prabhadevi </option>
<option value="Santacruz">Santacruz</option>
<option value="Sion">Sion</option>
<option value="Thane">Thane</option>
<option value="Vasai">Vasai</option>
<option value="Vikhroli">Vikhroli</option>
<option value="Vile Parle ">Vile Parle </option>
<option value="Virar">Virar</option>
<option value="Wadala">Wadala</option>
<option value="Walkeshwar">Walkeshwar</option>
<option value="Worli">Worli</option>

                		    </select>
                		      <input type="Submit" name="submit-cat" value="GO!!">		 
                	
				 
	 		</form>
		</div>
	</center>
	</body>
</html>


