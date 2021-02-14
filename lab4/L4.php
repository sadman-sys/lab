<html>
	<head></head>
	<body>
	 <?php
	   $uname="";
	   $err_uname="";
	   $password="";
	   $err_password="";
	   if($_SERVER['REQUEST_METHOD']== "POST"){
		   
		  // if(isset($_POST["SUBMIT"])){
			   if(empty($_POST["uname"])){
			   $err_uname="*Username Required";
			   }
			   else if (strlen ($_Post["uname"]) <6){
			   $err_uname="*Username should be at least 6 characters";}
			   else{
				   $uname=$_POST["uname"];
			   }
			   
            if (empty($_POST["PASS"])){
			$err_password= "*password requred";}
            else{
			$password=$_POST["pass"];}				
			 
			 
			   if (empty($_POST["hobbies"])){
			$err_hobbies= "*hobbies requred";}
            else{
			$hobbies=$_POST["hobb"];}
			 
			   if (empty($_POST["Profession"])){
			$err_profession= "*profession requred";}
            else{
			$Profession=$_POST["pro"];}
			 
			 
			 
            
				
		   
	   }
	   ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<form>
			<span>Username: </span> <input type="text"> <br>
			<span>Password: </span> <input type="password"> <br>
			<span>Gender:</span> <input type="radio" name="gender">Male<input type="radio" name="gender">Female<br>
			<span>Hobbies: </span> <input type="checkbox">Movies <input type="checkbox">Music <input type="checkbox">Games
			<br><span>Profession:</span>
			<select>
				<option>Teaching</option>
				<option>Business</option>
				<option>Service</option>
			</select> <br>
			<span>Bio</span>
			<textarea></textarea><br>
	<!-- <table border="1" >
		   <tr>
				 <th>Name</th>
				 <th>Id</th>
				 <th>Cgpa</th>
		   </tr>
		   <tr>
				 <td>Tanvir</td>
				 <td>123</td>
				 <td>2.4</td>
		   </tr>
			<tr>
				 <td>Sabbir</td>
				 <td>125</td>
				 <td>3.5</td>
		   </tr>	
		</table>
	-->
		<form action="submitted.php" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User access </span></td>
					<td>:<input type="text" placeholder="Username" name="uname"></td>
				</tr>
				<tr>
					<!--<td ><span>Password </span></td>-->
					<td>:<input type="password" placeholder="Password" name="pass"></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
				</tr>
				<tr>
					<td><span>Hobbies</span></td>
					<td>:<input type="checkbox" value="Movies" name="hobbies[]">Movies 
					     <input type="checkbox" value="Music" name="hobbies[]">Music 
						 <input type="checkbox" value="Games" name="hobbies[]">Games</td>
				</tr> ```````````````````````````````````````````````````````````````````
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="profession">
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> 
					</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="bio"></textarea></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			 
			
			<input type="submit" value="Submit">
		</form>
	</body>
</html> 
 17  forms/submitted.php 