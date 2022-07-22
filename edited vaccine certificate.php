<!DOCTYPE html>
<html>
<head>
	<title>Edited vaccine certificate</title>
	<style>
		#b
		{
			margin-left: 80px;
			padding: 10px;
			font-size: 20px;
			border:none;
			border-radius: 8px;
		}
		#b:hover
		{
  			background-color: #4CAF50;
  			color: white;
  			transition-duration: 0.2s;
		}
		div
		{
			background-color: #2980b9;
			padding: 20px;
			color:#f7f7f7;
			float:left;
			margin-left: 640px;
			margin-top: 280px;
			font-family: 'Encode Sans SC', sans-serif;
			text-transform: uppercase;
			border-radius: 12px;
		}
		body
		{
			background: rgb(89,3,160);
			background: linear-gradient(76deg, rgba(89,3,160,1) 0%, rgba(145,146,221,1) 25%, rgba(122,115,189,1) 75%, rgba(97,0,181,1) 100%, rgba(99,9,121,1) 100%);
		}
	</style>
</head>
<body>
<?php
	session_start();
	include("config.php");
	$db="Miniproject";
	$conn=mysqli_connect($server,$user,$pass,$db);
	$id=$_POST["id"];
	$name=$_POST["name"];
	$adnum=$_POST["anum"];
	$mbnum=$_POST["num"];
	$age=$_POST["age"];
	$_SESSION["age"]=$_POST["age"];
	$a=explode("-",$_SESSION["age"]);
	$b=array_reverse($a);
	$c=implode("-",$b);
	$vcn=$_POST["vaccine"];
	$gdr=$_POST["gender"];
	$refid=$_SESSION["val"];
	$_SESSION["name"]=$_POST["name"];
	$_SESSION["anum"]=$_POST["anum"];
	$_SESSION["num"]=$_POST["num"];
	$_SESSION["vaccine"]=$_POST["vaccine"];
	$_SESSION["gender"]=$_POST["gender"];
	$sql6= "UPDATE info SET Name='$name',Aadharnumber='$adnum',Mobilenumber='$mbnum',BirthDate='$c',Vaccine='$vcn',Gender='$gdr',ReferenceId='$refid' 
	        WHERE id='$id'";
	mysqli_query($conn,$sql6);
	mysqli_close($conn);
?>

<div>
	<h2>View certificate</h2>
	<input type="button" name="btn7" id="b"value="view" onclick="location.href='vaccine certificate.php'">
</div>	
</body>
</html>