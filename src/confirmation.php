<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
</div>
<div id="section21" class="container-fluid">

<?php

include 'connection.php';

// Passkey that got from link 
$passkey=$_GET['passkey'];
$tbl_name1="tempstart";
// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM $tbl_name1 WHERE confirm_code = ?";
$stmt=$conn->prepare($sql1);
$stmt->bind_param('s',$a);
$a=$passkey;
$stmt->execute();
$result1= $stmt->get_result();

// If successfully queried 
if($result1){
// Count how many row has this passkey
$count = mysqli_num_rows($result1);
// if found this passkey in our database, retrieve data from table "temp_members_db"
if($count==1){

while ($rows=mysqli_fetch_array($result1)){
$name=$rows['startupname'];
$email=$rows['emailid'];
$password=$rows['password1']; 
$contactnum1= $rows['contactno'];
$contactnum2= $rows['alternateno'];
$description = $rows['description'];
$city = $rows['location'];
$tbl_name2="signup";
}
// Insert data that retrieves from "temp_members_db" into table "registered_members" 
$sql2="INSERT INTO $tbl_name2(emailid, password1, startupname, contactno, alternateno, description, location)VALUES('$email','$password','$name','$contactnum1','$contactnum2','$description','$city')";
$result2=mysqli_query($conn,$sql2);
		// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
if($result2){

echo "Your account has been activated";
	echo "Successfully Logged</h3>";
	setcookie("gav1",$email,time()+(86400*30));
	setcookie('gav2',$password,time()+(86400*30));
	setcookie('gav3','1',time()+(86400*30));
	header('Location: home.php');

// Delete information of this user from table "temp_members_db" that has this passkey 
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
$result3=mysqli_query($conn,$sql3);

}
else{
	 die(mysqli_error($conn));
}
		
}

// if not found passkey, display message "Wrong Confirmation code" 
else {
echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"

}
else{
		 die(mysqli_error($conn));}

?>
</div>
<?php
include 'footer.php';
?>