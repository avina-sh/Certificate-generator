<!DOCTYPE html>
<html>
<head>
	<title>read form details</title>
	<link rel="stylesheet" type="text/css" href="readvaccinedetails.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
<?php
	session_start();
	include("config.php");
	$conn=mysqli_connect($server,$user,$pass);
	$sql1="CREATE DATABASE Miniproject";
	$res=mysqli_query($conn,$sql1);
	mysqli_close($conn);
	$db="Miniproject";
	$conn=mysqli_connect($server,$user,$pass,$db);
	$sql2 = "CREATE TABLE info (
	id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(30) NOT NULL,
	Aadharnumber VARCHAR(20) NOT NULL,
	Mobilenumber VARCHAR(10) NOT NULL,
	BirthDate VARCHAR(20) NOT NULL,
	Vaccine VARCHAR(20) NOT NULL,
	Gender VARCHAR(10) NOT NULL,
	ReferenceId VARCHAR(15) NOT NULL
	)";
	mysqli_query($conn,$sql2);	
	$name=$_POST["name"];
	$adnum=$_POST["anum"];
	$mbnum=$_POST["num"];
	$age=$_POST["age"];
	$a=explode("-",$age);
	$b=array_reverse($a);
	$c=implode("-",$b);
	$vcn=$_POST["vaccine"];
	$gdr=$_POST["gender"];
	$refid=$_POST["val"];
	$sql3="INSERT INTO info (Name,Aadharnumber,Mobilenumber,BirthDate,Vaccine,Gender,ReferenceId) 
	VALUES('$name','$adnum','$mbnum','$c','$vcn','$gdr','$refid')";
	mysqli_query($conn, $sql3);
	$_SESSION["name"]=$_POST["name"];
	$_SESSION["anum"]=$_POST["anum"];
	$_SESSION["num"]=$_POST["num"];
	$_SESSION["age"]=$_POST["age"];
	$_SESSION["vaccine"]=$_POST["vaccine"];
	$_SESSION["gender"]=$_POST["gender"];
	$_SESSION["val"]=$_POST["val"];
	mysqli_close($conn);
?>
<table>
	<tr>
		<th colspan="2">Details</th>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo $name; ?></td>
	</tr>
	<tr>
		<td>Aadhar number</td>
		<td><?php echo $adnum; ?></td>
	</tr>
	<tr>
		<td>Mobile number</td>
		<td><?php echo $mbnum; ?></td>
	</tr>
	<tr>
		<td>Birth Date</td>
		<td>
			<?php 
				$a=explode("-",$age);
				$b=array_reverse($a);
				$c=implode(" ",$b);
				echo $c; 
			?>		
		</td>
	</tr>
	<tr>
		<td>Vaccine</td>
		<td><?php echo $vcn; ?></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><?php echo $gdr; ?></td>
	</tr>
	<tr>
		<td>Reference id</td>
		<td><?php echo $refid; ?></td>
	</tr>
</table>
<div class="div1">
	<h2>Do you want to edit the given details?</h2>
	<input type="button" name="btn4" id="bt1" value="editformdata" onclick="location.href='editvaccinedetails.php'">
</div>
<div class="div2">	
	<h2>Click here to view vaccine certificate</h2>
	<input type="button" name="btn5" id="bt2" value="view certificate" onclick="location.href='vaccine certificate.php'">
</div>	
</body>
</html>