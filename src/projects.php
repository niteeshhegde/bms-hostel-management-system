<!DOCTYPE html>
<?php
include 'head1.php';
?>
 <?php 

 echo '
<div id="section1" class="container-fluid">
<h1 color="black" align="center">WELCOME TO BMS EDUCATIONAL TRUST HOSTELS</h1>
</div>

<div id="container">
<div class="progress">
<div class="progress progress-striped active">
  <div class="progress-bar" style="width: 100%"></div>
</div>
</div>
<div id="pro">HOSTEL STUDENTS</div>
<div class="progress">
<div class="progress progress-striped active">
  <div class="progress-bar" style="width: 100%"></div>
</div>
</div>

<div id = "allpro">'
?>
<?php
include 'connection.php';
$emailid=$_POST['hostel'];
$query = "SELECT stuid,name,dept,email,phone,father,parno,address,blood,sem,mess,hostel,rooom,password FROM students WHERE hostel =?";
$result = mysqli_query($conn,$query);
if(!$result){
	die(mysqli_error($conn));
}
while($arry = mysqli_fetch_array($result)){
	$a=date_create($arry['applyby']);
	echo 
"<div id ='ads'>
<table class='table table-striped table-hover ' text-align='center'>
  <thead>
    <tr><td colspan='3'><h4>Name: ". $arry['name']."</h4></td></tr>
  </thead>
  <tbody>
    <tr>
    </tr>
   <tr><td colspan='3'><h4>STUDENT ID: " . $arry['stuid']."</h4></td></tr>
    <tr >
    </tr>
	  </tbody>
</table> 
</div>";
}
?>

</div>
<br />
</div>
</div>
<?php
include 'footer.php';
?>