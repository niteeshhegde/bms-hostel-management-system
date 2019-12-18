<?php include 'head1.php' ?>

<div class="container" background="black" >
<h1 id="black">
<div id="section21" class="container-fluid">
<?php
include 'connection.php';

$stuid = $_POST['stuid'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$password22= $password2;
$name = $_POST['name'];
$contactnum = $_POST['contactnum'];
$email = $_POST['email'];
$blood = $_POST['blood'];
$sem = $_POST['sem'];
$dept = $_POST['dept'];
$father = $_POST['father'];
$parno = $_POST['parno'];
$address = $_POST['address'];
$hostel = $_POST['hostel'];
$room = $_POST['room'];
$mess = $_POST['mess'];


if(!$_POST['submit']){
echo "Please fill out the form";
header('Location: stusignup.php');
} 
if($password1!=$password22)
{
echo "Passwords didnot match";
} 
else {
	$sql="INSERT INTO students (stuid,name,dept,email,password,phone,father,parno,address,blood,sem,mess,rooom,hostel)
		VALUES (?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssssssssssssss',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n);
		$a=$stuid;
		$b=$name;
		$c=$dept;
		$d=$email;
		$e=$password22;
		$f=$contactnum;
		$g=$father;
		$h=$parno;
		$i=$address;
		$j=$blood;
		$k=$sem;
		$l=$mess;
		$m=$room;
		$n=$mess;
		$result=$stmt->execute();
		if($result)
	{echo "Successfully Signedup</h3>";
	header('Location: home.php');
}

	else{ echo " CANNOT register";}


}
?>
</div>
</h1>
</div>
<footer><div id ="us">AboutUs	&#160;	&#160;	&#160; ContactUs</div>
<div id="cr"> &#169;  Copyright - Get A Venture - 2016</div></footer>


</body>
</html>

