<?php
include 'head1.php';
 if(isset( $_COOKIE['gav3'])&&$_COOKIE['gav3']==2){
include 'connection.php';
$mypassword=$_COOKIE['gav2'];
$emailid=$_COOKIE['gav1'];
$query = "SELECT staid,name,phone,address,accno,salary,designation,password,email FROM staff WHERE staid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
	
     /* bind result variables */
    $g->bind_result($staid,$name,$phone,$address,$accno,$salary,$designation,$password,$email);
    /* fetch values */
    while ($g->fetch()) {
        $staid2=$staid;
		$name2=$name;
		$email2=$email;
		$phone2=$phone;
		$address2=$address;
		$password2=$password;
		$accno2=$accno;
		$salary2=$salary;
		$designation2=$designation;
		
    }
	if($mypassword==$password){
	
        $staid1=$staid2;
		$name1=$name2;
		$email1=$email2;
		$phone1=$phone2;
		$address1=$address2;
		$password1=$password2;
		$accno1=$accno2;
		$salary1=$salary2;
		$designation1=$designation2;
	
	
	
	
	}
	}
else{
		header('Location: home.php');			
}
echo'
<div id="section1" class="container-fluid">
<h1 color="black" align="center">WELCOME TO BMS EDUCATIONAL TRUST HOSTELS</h1>
</div>

<div class="container" text-align="center">

	<div class="row">
    <div class="col-md-8">

     <table id="t01" class="col-md-3" margin-left="230px">

   <tr>
    <th>ID</th>
    <th>';echo $staid1;echo '</th>
  </tr>
   <tr>
    <th>Name</th>
    <th>';echo $name1;echo '</th>
  </tr>
   <tr>
    <th>Emailid</th>
    <th>';echo $email1;echo '</th>
  </tr>
   <tr>
    <th>PHONE NO</th>
    <th>';echo $phone1;echo '</th>
  </tr>
   <tr>
    <th>Account no</th>
    <th>';echo $accno1;echo '</th>
  </tr>
  <tr>
    <th>Salary</th>
    <th>';echo $salary1;echo '</th>
  </tr>
  <tr>
    <th>Designation</th>
    <th>';echo $designation1;echo '</th>
  </tr>
  <tr>
    <th>Address</th>
    <th>';echo $address1;echo '</th>
  </tr>
  <tr>
  </table>
</div>
</div>

</div>';
 }
  else{
	 echo'';
 }
 
include 'footer.php';
?>