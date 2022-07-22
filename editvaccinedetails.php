<!DOCTYPE html>
<html>
<head>
	<title>Edit form data</title>
	<link rel="stylesheet" type="text/css" href="vaccinestyle.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
	<style>
		.t
		{
			border-collapse: collapse;
			border: 1px solid #2980b9;
		}
		#c,#cx
		{
			position: relative;
			top: 1.5em;
		}
	</style>
</head>
<body>
	<?php
	session_start();
	include("config.php");
	$db="Miniproject";
	$conn=mysqli_connect($server,$user,$pass,$db);
	$row="";
	$sql4="SELECT * FROM info ";
	$res4=mysqli_query($conn,$sql4);
	if($res4)
	{
		echo "<table class='t'>";
		echo "<tr>";
		echo "<th>id</th>";
		echo "<th>Name</th>";
		echo "<th>Aadharnumber</th>";
		echo "<th>Mobilenumber</th>";
		echo "<th>Birth Date</th>";
		echo "<th>Vaccine</th>";
		echo "<th>Gender</th>";
		echo "<th>ReferenceId</th>";
		echo "</tr>";
	    while($row = mysqli_fetch_assoc($res4))
	    {
	    	echo "<tr>";
	    	echo "<td class='t'>".$row["id"]."</td>";
	    	echo "<td class='t'>".$row["Name"]."</td>";
	    	echo "<td class='t'>".$row["Aadharnumber"]."</td>";
	    	echo "<td class='t'>".$row["Mobilenumber"]."</td>";
	    	echo "<td class='t'>".$row["BirthDate"]."</td>";
	    	echo "<td class='t'>".$row["Vaccine"]."</td>";
	    	echo "<td class='t'>".$row["Gender"]."</td>";
	    	echo "<td class='t'>".$row["ReferenceId"]."</td>";
	    	echo "</tr>";
	    }
	    echo "</table>";
	}    
	mysqli_close($conn);	
	?>
	<form action="edited vaccine certificate.php" method="POST" style="margin-left: 360px;">
		<table class="main">
			<th colspan="2"><i class="fas fa-syringe"></i>Covid-19 vaccine registration</th>
			<tr>
				<td>Enter name</td>
				<td><input type="text" name="name" id="name" maxlength="30" size="30"></td>
			</tr>
			<tr>
				<td>Enter aadhar number</td>
				<td><input type="text" name="anum" id="anum" pattern="[2-9]{1}[0-9]{3}\s{1}[0-9]{4}\s{1}[0-9]{4}" size="30"></td>
			</tr>
			<tr>
				<td>Enter mobile number</td>
				<td><input type="text" name="num" id="num" pattern="[0-9]{10}" size="30"></td>
			</tr>
			<tr>
				<td>Enter Birth Date</td>
				<td><input type="date" name="age" id="age" size="30"></td>
			</tr>
			<tr>
			<td>Vaccine</td>
			<td>
					<input type="radio" name="vaccine" id="c" value="Covishield">
					<label for="vaccine">Covishield</label>
					<input type="radio" name="vaccine" id="cx" value="Covaxin">
					<label for="vaccine">Covaxin</label>	
			</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" id="m" value="Male">
					<label for="gender">Male</label>
					<input type="radio" name="gender" id="f" value="Female">
					<label for="gender">Female</label>
				</td>
			</tr>
			<tr>
				<td>Enter id: <input type="number" name="id" id="id"></td>
				<td><input type="submit" name="submit" value="Register" id="reg" style="margin:1em auto;"></td>
			</tr>	
	</table>
	</form>
</body>
</html>