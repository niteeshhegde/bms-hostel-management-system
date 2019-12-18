<?php
include 'head1.php';
 if(isset( $_COOKIE['gav3'])&&$_COOKIE['gav3']==1){
include 'connection.php';
$mypassword=$_COOKIE['gav2'];
$emailid=$_COOKIE['gav1'];
$query = "SELECT stuid,name,dept,email,phone,father,parno,address,blood,sem,mess,hostel,rooom,password FROM students WHERE stuid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
	
     /* bind result variables */
    $g->bind_result($stuid,$name,$dept,$email,$phone,$father,$parno,$address,$blood,$sem,$mess,$hostel,$rooom,$password);
    /* fetch values */
    while ($g->fetch()) {
        $stuid2=$stuid;
		$name2=$name;
		$dept2=$dept;
		$email2=$email;
		$phone2=$phone;
		$father2=$father;
		$parno2=$parno;
		$sem2=$sem;
		$address2=$address;
		$blood2=$blood;
		$mess2=$mess;
		$hostel2=$hostel;
		$rooom2=$rooom;
		$password2=$password;
		
    }
	if($mypassword==$password){
	
	        $stuid1=$stuid2;
			$dept1=$dept2;
		$name1=$name2;
		$email1=$email2;
		$phone1=$phone2;
		$father1=$father2;
		$parno1=$parno2;
		$sem1=$sem2;
		$address1=$address2;
		$blood1=$blood2;
		$mess1=$mess2;
		$hostel1=$hostel2;
		$rooom1=$rooom2;
		$password1=$password2;
	
	
	
	
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
    <th>';echo $stuid1;echo '</th>
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
    <th>Fathers name</th>
    <th>';echo $father1;echo '</th>
  </tr>
  <tr>
    <th>Parents Contact no</th>
    <th>';echo $parno1;echo '</th>
  </tr>
  <tr>
    <th>Sem</th>
    <th>';echo $father1;echo '</th>
  </tr>
  <tr>
    <th>Department</th>
    <th>';echo $dept1;echo '</th>
  </tr>
  <tr>
    <th>Address</th>
    <th>';echo $address1;echo '</th>
  </tr>
  <tr>
    <th>Blood</th>
    <th>';echo $blood1;echo '</th>
  </tr>';
    if($mess1=="1"){
	  echo '
  <tr>
    <th>Mess</th>
    <th>';echo "VEG";echo '</th>
  </tr>';}
     else{
	  echo '
  <tr>
    <th>Mess</th>
    <th>';echo "NON VEG";echo '</th>
  </tr>';}
 echo  '<tr>';
  if($hostel1=="1"){
	  echo '
    <th>Hostel</th>
    <th>';echo 'NATIONAL BOYS HOSTEL 1';echo '</th>
  </tr>';}
  else if($hostel1=="2"){
	  echo '
    <th>Hostel</th>
    <th>';echo 'NATIONAL BOYS HOSTEL 2';echo '</th>
  </tr>';}
 
  else if($hostel1=="3"){
	  echo '
    <th>Hostel</th>
    <th>';echo 'NATIONAL BOYS HOSTEL 3';echo '</th>
  </tr>';}
    else if($hostel1=="4"){
	  echo '
    <th>Hostel</th>
    <th>';echo 'GIRLS HOSTEL 1';echo '</th>
  </tr>';}
    else if($hostel1=="5"){
	  echo '
    <th>Hostel</th>
    <th>';echo 'GIRLS HOSTEL 2';echo '</th>
  </tr>';}
    else if($hostel1=="6"){
	  echo '
    <th>Hostel</th>
    <th>';echo 'INTERNATIONAL';echo '</th>
  </tr>';}
 echo'
  <tr>
    <th>Room</th>
    <th>';echo $rooom1;echo '</th>
  </tr>
  </table>
</div>
</div>

</div>';
 }

 
include 'footer.php';
?>