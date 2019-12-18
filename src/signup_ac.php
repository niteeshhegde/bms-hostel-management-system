<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
</div>
<div id="section21" class="container-fluid">
<?php
include 'connection.php';

// table name 
$tbl_name='tempstart';

// Random confirmation code 
$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$name= $_POST['startupname'];
$email= $_POST['emailid'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
if($password1!=$password2){
	echo"passwords are not matching";
	
}else{

$query = "SELECT password1 FROM signup WHERE emailid = ?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$email;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
	echo " This Email-id is already registered ";
}
else{
$count= $g->num_rows;

$contactnum1= $_POST['contactnum'];
$contactnum2= $_POST['contactnum2'];
$description = $_POST['description'];
$city = $_POST['city'];
$password= password_hash($password2,PASSWORD_DEFAULT);
// Insert data into database 
$sql="INSERT INTO $tbl_name(emailid, password1, startupname, contactno, alternateno, description, location, confirm_code)VALUES(?,?,?,?,?,?,?,?)";
$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssssssss',$a,$b,$c,$d,$e,$f,$g,$h);
		$a=$email;
		$b=$password;
		$c=$name;
		$d=$contactnum1;
		$e=$contactnum2;
		$f=$description;
		$g=$city;
		$h=$confirm_code;
		$result=$stmt->execute();
		if($result)
	{

// if suceesfully inserted data into database, send confirmation link to email 
// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$email;

// Your subject
$subject="Confirm Signup";

// From
$header="from: niteesh hegde <ntshhegde@gmail.com>";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="You might have to copy-paste the link if not highlighted. \n\r\n";
$message.="localhost/gav/confirmation.php?passkey=$confirm_code";

// send email
$sentmail = mail($to,$subject,$message,$header);
}

// if not found 
else {
echo " This Email-id is already registered ";
}

// if your email succesfully sent
if($sentmail){
echo "<h1>Check your mailbox. A confirmation mail is sent.</h1> <h3> *Please check in promotions, social, updates, spam and in all categories if the mail didnot land in primary mailbox.</h3>";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}
}
}
?>
</div>
<?php
include 'footer.php';
?>