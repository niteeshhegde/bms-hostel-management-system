<?php include 'head1.php' ?>
<div id="section1" class="container-fluid">

<div class="container" background="black" >
<h1 id="black">
<div id="section21" class="container-fluid">
<?php
include 'connection.php';

$staid = $_POST['staid'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$password22= $password2;
$name = $_POST['name'];
$contactnum = $_POST['contactnum'];
$email = $_POST['email'];
$salary = $_POST['salary'];
$accno = $_POST['accno'];
$designation = $_POST['designation'];
$address = $_POST['address'];


if(!$_POST['submit']){
echo "Please fill out the form";
header('Location: stusignup.php');
} 
if($password1!=$password22)
{
echo "Passwords didnot match";
} 
else {
	$sql="INSERT INTO staff (staid,name,phone,address,accno,salary,designation,email,password)
		VALUES (?, ?, ?, ?, ?, ?,?,?,?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('sssssssss',$a,$b,$c,$g,$h,$i,$j,$k,$l);
		$a=$staid;
		$b=$name;
		$c=$contactnum;
		$g=$address;
		$h=$accno;
		$i=$salary;
		$j=$designation;
		$k=$email;
		$l=$password22;
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

