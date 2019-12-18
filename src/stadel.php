<?php
include 'head1.php';
 {
include 'connection.php';
$emailid=$_POST['staid'];
$query = "DELETE FROM staff WHERE staid =?";
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
<h1 color="black" align="center">BMS EDUCATIONAL TRUST HOSTELS</h1>
</div>
<div id="section22" class="container-fluid">
<h1 color="black" align="center">THE EMPLOYEE IS REMOVED</h1>
</div>


</div>';
 }

 
include 'footer.php';
?>