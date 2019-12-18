<?php
include 'head1.php';
 if(isset( $_COOKIE['gav3'])&&$_COOKIE['gav3']==1){
include 'connection.php';
$mypassword=$_COOKIE['gav2'];
$emailid=$_COOKIE['gav1'];
$name = $_POST['name'];
echo'
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
<div id= "quote"><br />Get Projects From Startups.<br />Work Leisurely !</div></div>
<div id="section22" class="container-fluid">';
$contactnum = $_POST['contactnum'];
$college = $_POST['college'];
$query = "SELECT stuid,password FROM student1 WHERE emailid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
	
     /* bind result variables */
    $g->bind_result($stuid,$password);
    /* fetch values */
    while ($g->fetch()) {
        $stuid2=$stuid;
		
		$password2=$password;
    }
	if(password_verify($mypassword,$password)){
	
		$stuid1=$stuid2;
		
		$password1=$password2;
	$query1= "UPDATE student1 SET name = ?, mobileno = ?, college = ? WHERE stuid= ?";
		$stmt=$conn->prepare($query1);
		$stmt->bind_param('sssi',$x,$y,$z,$stuid1);
		$x=$name;
		$y=$contactnum;
		$z=$college;
$status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  trigger_error($stmt->error, E_USER_ERROR);}
	else {
		echo"<h1>The information is reset.</h1>";
	}
	
	
	}
	
	}
	else{
		
	}
 }
 echo'</div>
 </div>';
  
include 'footer.php';
	?>