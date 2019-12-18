<?php
include 'head1.php';
 {
include 'connection.php';
$emailid=$_POST['stuid'];
$query = "DELETE FROM students WHERE stuid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
if($g->execute()){
	
echo '<style> alert("sucessfully deleted");</style>';
	}
else{		
			header('Location: nosuch.php');		
}
echo'
<div id="section1" class="container-fluid">
<h1 color="black" align="center">WELCOME TO BMS EDUCATIONAL TRUST HOSTELS</h1>
</div>
<div id="section22" class="container-fluid">
<h1 color="black" align="center">THE STUDENT IS REMOVED</h1>
</div>


</div>';
 }

 
include 'footer.php';
?>