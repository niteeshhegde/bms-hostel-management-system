<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
</div>
<div id="section22" class="container-fluid">
<?php

require("connection.php");
$mypassword=$_COOKIE['gav2'];
$emailid=$_COOKIE['gav1'];
$newpass = $_POST['password1'];
$newpass1 = $_POST['password2'];
if($newpass == $newpass1)
{
	$query = "SELECT sid,password1 FROM signup WHERE emailid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
	$password10 = password_hash($newpass1,PASSWORD_DEFAULT);
     /* bind result variables */
    $g->bind_result($sid,$password);
    /* fetch values */
    while ($g->fetch()) {
        $sid2=$sid;
		
		$password2=$password;
    }
	if(password_verify($mypassword,$password2)){
	
		$sid1=$sid2;
		
		$password1=$password2;
	
	$query1= "UPDATE signup SET password1= ? WHERE sid= ?";
		$stmt=$conn->prepare($query1);
		$stmt->bind_param('si',$a,$b);
		$a=$password10;
		$b=$sid;
$status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  trigger_error($stmt->error, E_USER_ERROR);}
else{
	echo "<h1>Your password has been updated</a>";
}

}
else
{
	
}	
}
}
else{
	echo "<h1>Passwords must match </h1>";
}

?>
</div>
<?php
include 'footer.php';
?>