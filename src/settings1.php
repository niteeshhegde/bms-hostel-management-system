<?php
include 'head1.php';
 if(isset( $_COOKIE['gav3'])&&$_COOKIE['gav3']==1){
include 'connection.php';
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
<div id="section22" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
<div id="section22" class="container-fluid">

<div class="container">

	<div class="row">
    <div class="col-md-8">

      <section>      
        <h1 class="entry-title"><span>General Settings</span> </h1>
        <hr>
            <form class="form-horizontal" method="post" name="signup" id="signup" action="savset1.php">        
        
        <div class="form-group">
          <label class="control-label col-sm-3">Full Name <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="name" id="mem_name" value="'; echo $name1; echo'">
          </div>
        </div>
        
        <div class="form-group">        
          <label class="control-label col-sm-3">Contact No. <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
          	<div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="contactnum" id="contactnum" value="';echo $mobileno1;echo '" >
            </div>
          </div>
        </div>
         <div class="form-group">        
          <label class="control-label col-sm-3">College. <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
          	<div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="college" id="contactnum" value="';echo $college1;echo '" >
            </div>
          </div>
        </div>
        

		
        
        
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="submit" type="submit" value="Reset" class="btn btn-primary">
          </div>
        </div>
      </form>
	  
	  
	  <section>      
        <h1 class="entry-title"><span>Password Settings</span> </h1>
        <hr>
	  <form class="form-horizontal" method="post" name="signup" id="signup" action="psavset1.php">        
        
         <div class="form-group">
          <label class="control-label col-sm-3">Set Password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password1" id="password" placeholder="Choose password (5-15 chars)" >
           </div>   
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password2" id="cpassword" placeholder="Confirm your password" >
            </div>  
          </div>
        </div>
        

		
        
        
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="submit" type="submit" value="Reset" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
	</div>
</div>
</div>

</div>';
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
 
include 'footer.php';
?>