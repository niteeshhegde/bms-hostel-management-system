<?php
include 'head1.php';
 if(isset( $_COOKIE['gav3'])&&$_COOKIE['gav3']==2){
include 'connection.php';
$mypassword=$_COOKIE['gav2'];
$emailid=$_COOKIE['gav1'];
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
        $id=$sid;
    }
	if(password_verify($mypassword,$password)){
	
	$id1=$id;

	}
	}
else{
		header('Location: home.php');			
}
 }
 else{
		header('Location: home.php');			
}




echo'

  

<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >


<div id= "quote"><br />Get Projects From StartUps.<br />Work Leisurely !
</div>
</div>
<div id="section21" class="container-fluid">
<div id="container">
<div class="progress">
<div class="progress progress-striped active">
  <div class="progress-bar" style="width: 100%"></div>
</div>
</div>
<div id="pro">APPLIED STUDENTS</div>
<div class="progress">
<div class="progress progress-striped active">
  <div class="progress-bar" style="width: 100%"></div>
</div>
</div>
<div id ="allpro">';
$query = "SELECT pid,proname FROM addpro where sid='$id' ORDER BY pid ASC";

$result = mysqli_query($conn,$query);
while($array = mysqli_fetch_array($result)) {
echo "<div id='title'>".$array['proname']."</div>";
$pid3=$array['pid'];
$query2 = "SELECT name,phone,email,college,studescription FROM addstu  WHERE pid= '$pid3'";
$result2 = mysqli_query($conn,$query2);
if(!$result2){
	die(mysqli_error($conn));
}
while($arry = mysqli_fetch_array($result2)){
	echo 
"<div id ='stus'>
<table class='table table-striped table-hover ' text-align='center'>
  <thead>
    <tr><td>Name: ". $arry['name']."</td><td>Phone: ". $arry['phone']."</td><td>College: ". $arry['college']."</td></tr>
  </thead>
  <tbody>
    <tr>
    </tr>
   <tr><td colspan='3'>Email: ". $arry['email']."</td></tr>
    <tr >
    </tr>
    <tr><td colspan='3'>Description: ".$arry['studescription']."</td></tr>
    
  </tbody>
</table> 
</div>";
}
}

?>
</div>
</div>
</div>
<?php
include 'footer.php';
?>