<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=$_POST['NAME'];
	$age=$_POST['AGE'];
	$Cn=$_POST['CN'];
	$EM=$_POST['EM'];
	$Sa=$_POST['SA'];
	$Sd=$_POST['SD'];
	$Ed=$_POST['ED'];
	$QUL=$_POST['QUL'];
	$DAE=$_POST['DAE'];
	$SYS=$_POST['SYS'];
	$WE=$_POST['WE'];
}
?>
<body>
<h2><u>Personal Information</u></h2><br>
<table>
<tr>
<td>Name:</td><td><?php echo $name ?></td>
</tr>
<tr>
<td>Age:</td><td><?php echo $age ?></td>
</tr>
<tr>
<td>Contact Number:</td><td><?php echo $Cn ?></td>
</tr>
<tr>
<td>E-mail:</td><td><?php echo $EM ?></td>
</tr>
</table>
<hr>
<h2><u>Education</u></h2><br>
<table>
<tr>
<td>Studyed At:</td><td><?php echo $Sa ?></td>
</tr>
<tr>
<td>Start year:</td><td><?php echo $Sd ?></td>
<td>End year:</td><td><?php echo $Ed ?></td>
</tr>
<tr>
<td>Qulification:</td><td><?php echo $QUL ?></td>
</tr>
<tr>
<td>About Myself:</td><td><?php echo $DAE ?></td>
</tr>
</table>
<hr>
<h2><u>Skills</u></h2><br>
<table>
<tr>
<td><?php echo $SYS ?></td>
</tr>
</table>
<hr>
<h2><u>Work Experince</u></h2><br>
<table>
<tr>
<td><?php echo $WE ?></td>
</tr>
</table>
<a href="" download>DOWNLOAD</a>
</body>
