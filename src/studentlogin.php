<?php
include 'head1.php';
?><div id="section1" class="container-fluid">
<h1 color="black" align="center">WELCOME TO BMS EDUCATIONAL TRUST HOSTELS</h1>
</div>


<div id="section21" class="container-fluid">
<?php
require 'connection.php';
{
$myemailid = $_POST['emailid'];
$mypassword = $_POST['password'];
$password22= $mypassword;
$query = "SELECT password FROM students WHERE stuid =?";
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
	if($mypassword==$pass){

	echo "Successfully Logged</h3>";
	setcookie("gav1",$myemailid,time()+(86400*30));
	setcookie('gav2',$mypassword,time()+(86400*30));
	setcookie('gav3','1',time()+(86400*30));
	header('Location: home.php');
	}
	else{
	echo '<h1>Incorrect Username or Password </h1> ';

}
}
else {
	echo '<h1>This id is not registered</h1> ';

}



}
?></div><?php
include 'footer.php';
?>