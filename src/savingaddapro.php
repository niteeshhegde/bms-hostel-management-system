<?php
session_start();
include 'connection.php';
$myemailid=$_COOKIE['gav1'];
$mypassword=$_COOKIE['gav2'];
$query = "SELECT sid,password1,startupname,description FROM signup WHERE emailid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$myemailid);
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
     /* bind result variables */
        $g->bind_result($id,$pwd,$sname,$sdesc);

    /* fetch values */
    while ($g->fetch()) {
		
        $sid1=$id;
		$password=$pwd;
		$startupname1=$sname;
		$startupdescription1=$sdesc;
		if(password_verify($mypassword,$password)){
			$sid=$sid1;
			$startupname=$startupname1;
			$startupdescription=$startupdescription1;
		}
	else{
				header('Location: signin.php');
	}
	}
		
    }
	else{
				header('Location: signin.php');
	}

$projectname = $_POST['projectname'];
$stipened = $_POST['stipened'];
$location = $_POST['city'];
$apply = $_POST['applyby'];
$category=$_POST['category'];
$applyby = DateTime::createFromFormat('d/m/Y', $apply )->format('Y-m-d');
$whocanapply = $_POST['whocanapply'];
$projectdescription = $_POST['projectdescription'];

if(!$_POST['submit']){
echo "Please fill out the form";
header('Location: apply.php');
} else {
	$sql2= "INSERT INTO addpro (sid, startupname, startupdescription, proname, stipened, city, applyby, category, whocanapply, prodetails) 
	VALUES ( ?,?,?,?,?,?,?,?,?,? )" ;
	$stmt=$conn->prepare($sql2);
		$stmt->bind_param('ssssssssss',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
		$a=$sid;
		$b=$startupname;
		$c=$startupdescription;
		$d=$projectname;
		$e=$stipened;
		$f=$location;
		$g=$applyby;
		$h=$category;
		$i=$whocanapply;
		$j=$projectdescription;
		$result2=$stmt->execute();
		header('Location: projectadded.php');
}
	
	

?>

