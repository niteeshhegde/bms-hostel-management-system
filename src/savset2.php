<?php
include 'head1.php';
 if(isset( $_COOKIE['gav3'])&&$_COOKIE['gav3']==2){
include 'connection.php';
$mypassword=$_COOKIE['gav2'];
$emailid=$_COOKIE['gav1'];
$startupname = $_POST['startupname'];
echo'
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
<div id= "quote"><br />Get Projects From Startups.<br />Work Leisurely !</div></div>
<div id="section22" class="container-fluid">';
$contactnum = $_POST['contactnum'];
$description = $_POST['description'];
$query = "SELECT sid,password1 FROM signup WHERE emailid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
	
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
	$query1= "UPDATE signup SET startupname = ?, contactno = ?, description = ? WHERE sid= ?";
		$stmt=$conn->prepare($query1);
		$stmt->bind_param('sssi',$x,$y,$z,$sid1);
		$x=$startupname;
		$y=$contactnum;
		$z=$description;
$status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  trigger_error($stmt->error, E_USER_ERROR);}
	else {
		echo"<h1>The information is reset.</h1>";
	}
	
	
	}else{
		echo '';
	}
	
	}
	else{
		echo"";
	}
 }
 echo'</div>
 </div>';
  
include 'footer.php';
	?>