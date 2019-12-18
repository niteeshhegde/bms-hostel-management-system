<?php
include 'head1.php';
 if(isset( $_COOKIE['gav3'])&&$_COOKIE['gav3']==1){
include 'connection.php';
$pid=$_GET['id'];
$mypassword=$_COOKIE['gav2'];
$emailid=$_COOKIE['gav1'];
$query = "SELECT stuid,name,emailid,mobileno,college,password FROM student1 WHERE emailid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
	
     /* bind result variables */
    $g->bind_result($stuid,$name,$emailid,$mobileno,$college,$password);
    /* fetch values */
    while ($g->fetch()) {
        $stuid2=$stuid;
		$name2=$name;
		$emailid2=$emailid;
		$mobileno2=$mobileno;
		$college2=$college;
		$password2=$password;
    }
	if(password_verify($mypassword,$password)){
	
	$stuid1=$stuid2;
		$name1=$name2;
		$emailid1=$emailid2;
		$mobileno1=$mobileno2;
		$college1=$college2;
		$password1=$password2;
	
	
	
	
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

<form class="form-horizontal" method="POST" action="savingapply.php">
  <fieldset>
    <legend><h2>APPLICATION FORM</h2></legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">FULL NAME</label>
      <div class="col-lg-10">
        <h4>';echo $name1;echo'</h4>
      </div>
    </div>

	<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">PHONE NUMBER</label>
      <div class="col-lg-10">
        <h4>';echo $mobileno1;echo'</h4>
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
                <h4>';echo $emailid1;echo'</h4>
      </div>
    </div>
	<div class="form-group">
      <label for="college" class="col-lg-2 control-label">COLLEGE</label>
      <div class="col-lg-10">
        <h4>';echo $college1;echo'</h4>
      </div>
    </div>
	
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">DESCRIPTION</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="applicantdescription"  name="description" placeholder="Describe how well you could handle the project. Mention if you have any experience on working on such a project"></textarea>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
		<input type="hidden" name="stuid" value= ';echo $stuid1; echo' >
		<input type="hidden" name="pid" value=';echo $pid; echo'>
		<input type="hidden" name="name" value=';echo $name; echo'>
		<input type="hidden" name="phoneno" value=';echo $mobileno1; echo'>
		<input type="hidden" name="collegeA" value=';echo $college1; echo'>
		<input type="hidden" name="emailid" value=';echo $emailid1; echo'>
<button type="submit" name="submit" value="submit "class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
';
 }
 else{
	 echo'
	 
	 <div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >


<div id= "quote"><br />Get Projects From StartUps.<br />Work Leisurely And Get Paid !
</div>
</div>
	 
	 	 
	 <div id="section21" class="container-fluid">
	 <h1>Login as student to apply</h1>
	 </div>';
 }

 include "footer.php";
?>