Caterer : <select>
                				<option value="Matunga"> Matunga</option>
                				<option value="Dadar">Dadar</option>
                				<option value="Wadala">Wadala</option>
                				<option value="Parel">Parel</option>
                				<option value="Churney Road">Churney Road</option>
                				<option value="Masjid">Masjid</option>
                		      </select>
                		      <br><input type="Submit" value="GO">	



   if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $EmailID=$_POST["EmailID"];
    $s ="INSERT INTO user(FirstName,LastName,EmailId) VALUES ('$name','$lastname','$EmailID')";
    $conn->query($s);