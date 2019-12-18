<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
</div>
<div id="section22" class="container-fluid">
<?php

require("connection.php");

$newpass = $_POST['newpass'];
$newpass1 = $_POST['newpass1'];
$stuid = $_POST['stuid'];
$code = $_GET['code'];
if($newpass == $newpass1)
{
	$password = password_hash($newpass1,PASSWORD_DEFAULT);
	
	$query1= "UPDATE student1 SET password= ? WHERE stuid= ?";
		$stmt=$conn->prepare($query1);
		$stmt->bind_param('si',$a,$b);
		$a=$password;
		$b=$stuid;
$status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  trigger_error($stmt->error, E_USER_ERROR);}
	$query2="UPDATE student1 SET passreset='0' WHERE stuid= ?";
	$stmt=$conn->prepare($query2);
		$stmt->bind_param('i',$a);
		$a=$stuid;
        $status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  trigger_error($stmt->error, E_USER_ERROR);
  }else
  {
	echo "<h1>Your password has been updated</h1><a href='studentsignin.php'><h1>Click here to login</h1></a>";
}

}
else
{
	echo "Passwords must match <a href='forgot_pass.php?code=$code&id=$stuid'><h1 color='black'>Click here to go back</h1><a/>";
}	

?>
</div>
<?php
include 'footer.php';
?>