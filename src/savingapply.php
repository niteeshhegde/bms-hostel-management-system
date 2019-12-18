<?php
session_start();
include 'connection.php';

$collegeA = $_POST['collegeA'];
$stuid=$_POST['stuid'];
$spid=$_POST['pid'];
$ssid=$_SESSION['ssid'];
$name = $_POST['name'];
$emailid = $_POST['emailid'];
$phoneno = $_POST['phoneno'];
$college = $_POST['collegeA'];
$description = $_POST['description'];

if(!$_POST['submit']){
echo "Please fill out the form";
header('Location: apply.php');
} else {
$sql="INSERT INTO addstu (pid,sid,name,phone,email,college,studescription) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('iisssss',$a,$b,$c,$d,$e,$f,$g);
		$a=$spid;
		$b=$stuid;
		$c=$name;
		$d=$phoneno;
		$e=$emailid;
		$f=$college;
		$g=$description;
		$result=$stmt->execute();
		if($result)
	{echo "Successfully Signedup</h3>";
			header('Location: sa.php');
		
}
else{
	header('Location: apply.php');
}
}

?>