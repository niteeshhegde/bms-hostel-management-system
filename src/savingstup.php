<?php include 'head1.php' ?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >


<div id= "quote"><br />Get Projects From StartUps.<br />Work Leisurely !</div></div>
<div class="container" background="black" >
<h1 id="black">
<div id="section21" class="container-fluid">
<?php
include 'connection.php';

$emailid = $_POST['emailid'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$password22= $password2;
$name = $_POST['name'];
$contactnum = $_POST['contactnum'];
$contactnum2 = $_POST['contactnum2'];
$college = $_POST['college'];


if(!$_POST['submit']){
echo "Please fill out the form";
header('Location: stusignup.php');
} 
if(!(password_verify($password1,$password22)))
{
echo "Passwords didnot match";
} 
else {
	$sql="INSERT INTO student1 (name, emailid, password, mobileno, alternateno, college)
		VALUES (?, ?, ?, ?, ?, ?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssssss',$a,$b,$c,$d,$e,$f);
		$a=$name;
		$b=$emailid;
		$c=$password22;
		$d=$contactnum;
		$e=$contactnum2;
		$f=$college;
		$result=$stmt->execute();
		if($result)
	{echo "Successfully Signedup</h3>";
	setcookie("gav1",$b,time()+(86400*30));
	setcookie('gav2',$c,time()+(86400*30));
	setcookie('gav3','1',time()+(86400*30));
	header('Location: home.php');
}

	else{ echo " This Email-id is already registered ";}


}
?>
</div>
</h1>
</div>
<footer><div id ="us">AboutUs	&#160;	&#160;	&#160; ContactUs</div>
<div id="cr"> &#169;  Copyright - Get A Venture - 2016</div></footer>


</body>
</html>

