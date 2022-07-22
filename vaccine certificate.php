<!DOCTYPE html>
<html>
<head>
	<title>Vaccine certificate</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vaccine certificate.css">
</head>
<body>
	<?php
		session_start();
		include("config.php");
		$db="Miniproject";
		$name=$_SESSION["name"];
		$adnum=$_SESSION["anum"];
		$mbnum=$_SESSION["num"];
		$age=$_SESSION["age"];
		$vcn=$_SESSION["vaccine"];
		$gdr=$_SESSION["gender"];
		$refid=$_SESSION["val"];
		$conn=mysqli_connect($server,$user,$pass,$db);
		mysqli_close($conn);
	?>
	<form style="border: 2px solid black; margin-left: 400px; margin-right: 400px;">
		<table align="center">
			<img src="emblem.png" alt="Four lion" id="img" style="width:30px;height:60px;margin-left:350px;padding: 5px;">
			<p text align="center"><b>Ministry of Health & Family Welfare</b></p>
			<p text align="center"><b>Government of India</b></p>
			<p text align="center" style="font-size:25px;color:#03483D;font-family: 'Roboto', sans-serif;">Provisional Certificate for COVID-19 Vaccination - 1st Dose</p>
			<tr style="color:#03483D;font-family: 'Roboto', sans-serif;"><td><u><b>Beneficiary Details</b></u></td></tr>
			<tr>
				<td>Name of the person</td>
				<td><input type="text" name="pname" value="<?php echo $name; ?>" size="30" readonly></td>
			</tr>
			<tr>
				<td>Birth Date</td>
				<td>
					<input type="text" name="age"value="<?php 
					$a=explode("-",$age);
					$b=array_reverse($a);
					$c=implode(" ",$b);
					echo $c; 
					?>" size="30" readonly>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="Gender" value="<?php echo $gdr; ?>" size="30" readonly></td>
			</tr>
			<tr>
				<td>Aadhar id</td>
				<td><input type="text" name="ano" value="<?php echo 'Aadhaar'.' '.'#'.' '.'XXXXXXXX'.substr($adnum,10); ?>" size="30" readonly></td>
			</tr>
			<tr>
				<td>Beneficiary Reference Id</td>
				<td><input type="text" name="Rid" value="<?php echo $refid; ?>" size="30" readonly></td>
			</tr>
			<tr style="color:#03483D;font-family: 'Roboto', sans-serif;"><td><u><b>Vaccination Details<b></u></td></tr>
			<tr>
				<td>Vaccine Name</td>
				<td><input type="text" name="Vaccine" value="<?php echo $vcn; ?>" size="30" id="u" readonly></td>
			</tr>
			<tr>
				<td>Date of dose</td>
				<td><input type="text" name="date" id="date" size="30" value="<?php
						$a=Date("d-m-20y");
						$month = ['1'=>'Jan','2'=>'Feb','3'=>'Mar','4'=>'April','5'=>'May','6'=>'June','7'=>'July','8'=>'August','9'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec'];
						$b=explode("-",$a);
						$date=$b[0];
						$mon=$b[1];
						$year=$b[2];
						$mon=$mon%12;
						$x=$month[$mon];
						echo $date." ".$x." ".$year;
						?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Next due date</td>
				<td>
					<input type="text" name="nextdate" size="30" value="<?php
						$a=Date("d-m-20y");
						$b=explode("-",$a);
						$date=$b[0];
						$mon=$b[1];
						$year=$b[2];
						$x=$date+2;
						$y=$date+3;
						$month = ['1'=>'Jan','2'=>'Feb','3'=>'Mar','4'=>'April','5'=>'May','6'=>'June','7'=>'July','8'=>'August','9'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec'];
						$first=($mon+2)%12;
						$second=($mon+3)%12;
						$e=$month[$first];
						$f=$month[$second];
						echo "Between ".$x." ".$e." ".$year." and ".$y." ".$f." ".$year;
					?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Vaccinated by</td>
				<td><input type="text" name="dname" value="Sanjay" size="30" readonly></td>
			</tr>
			<tr>
				<td>vaccination at</td>
				<td><input type="text" name="hosname" value="APOLLO HOSPITAL,Chennai,TamilNadu" size="35" readonly></td>
			</tr>
			<tr style="background-color: lightgrey; padding-top: 10px;">	
				<td>
					<img src="modiji.jpeg" width="150px" id="modi">
					<p style="margin-bottom: 60px; padding-left: 15px;" id="y">Together,India will defeat COVID-19</p>
					<p id="para">C<span>O</span>WIN</p>
					<p style="font-size: 10px; color: blue; margin-bottom:40px;" id="x">Winning over COVID</p>
				</td>
				<td>
					<img src="qr.png" width="200px" style="padding:10px;" id="i">
					<p style="font-size: 12px;">This is a secure qr code.For further details please visit</p> 
					<a href="https.//www.cowin.gov.in" style="font-size: 12px;">https.//www.cowin.gov.in</a>
				</td>
			</tr>
		</table>		
	</form>	
</body>
</html>