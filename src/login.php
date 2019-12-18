<?php
include 'head1.php';
?>
     

<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >


<div id= "quote"><br />Get Projects From StartUps.<br />Work Leisurely !
</div>
</div>
<div id="section21" class="container-fluid">
<?php
require 'connection.php';
$ss=$_POST['ss'];
$w='111';
if($ss==1){
$myemailid = $_POST['emailid'];
$mypassword = $_POST['password'];
$password22= password_hash($mypassword,PASSWORD_DEFAULT);
$query = "SELECT password FROM student1 WHERE emailid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$myemailid);
$a=$myemailid;
$g->execute();
$g->store_result();
$g->get_result();

$count= $g->num_rows;
if($count==1){
     /* bind result variables */
    $g->bind_result($name);

    /* fetch values */
    while ($g->fetch()) {
        $pass =  $name;
    }
	if(password_verify($mypassword,$pass)){

	echo "Successfully Logged</h3>";
	setcookie("gav1",$myemailid,time()+(86400*30));
	setcookie('gav2',$mypassword,time()+(86400*30));
	setcookie('gav3','1',time()+(86400*30));
	header('Location: home.php');}
	else{
	echo '<h1>Incorrect Username or Password </h1> ';

}
}
else {
	echo '<h1>This email id is not registered</h1> ';

}



}
else{
	
	$myemailid = $_POST['emailid'];
$mypassword = $_POST['password'];
$password22= password_hash($mypassword,PASSWORD_DEFAULT);
$query = "SELECT password1 FROM signup WHERE emailid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$myemailid;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
     /* bind result variables */
    $g->bind_result($name);

    /* fetch values */
    while ($g->fetch()) {
        $pass =  $name;
    }
	if(password_verify($mypassword,$pass)){

	echo "Successfully Logged</h3>";
	setcookie("gav1",$myemailid,time()+(86400*30));
	setcookie('gav2',$mypassword,time()+(86400*30));
	setcookie('gav3','2',time()+(86400*30));
	header('Location: home.php');}
	else{
	echo '<h1>Incorrect Username or Password </h1> ';

}
}
else {
	echo '<h1>This email id is not registered</h1> ';

}


	

}
?>

</div>


<?php
include 'footer.php';
?>