<?php
include 'head1.php';
 if(isset( $_COOKIE['gav3'])&&$_COOKIE['gav3']==2){
include 'connection.php';
$mypassword=$_COOKIE['gav2'];
$emailid=$_COOKIE['gav1'];
$query = "SELECT sid,password1,startupname,contactno,description FROM signup WHERE emailid =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
	
     /* bind result variables */
    $g->bind_result($sid,$password1,$startupname,$contactno,$description);
    /* fetch values */
    while ($g->fetch()) {
        $sid2=$sid;
		$password2=$password1;
		$startupname2=$startupname;
		$contactno2=$contactno;
		$description2=$description;
    }
	if(password_verify($mypassword,$password2)){
	
	       $sid1=$sid2;
		$password11=$password2;
		$startupname1=$startupname2;
		$contactno1=$contactno2;
		$description1=$description2;
	
	
	
	
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
            <form class="form-horizontal" method="post" name="signup" id="signup" action="savset2.php">        
        
        <div class="form-group">
          <label class="control-label col-sm-3">Startup Name <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="startupname" id="mem_name" value="'; echo $startupname1; echo'">
          </div>
        </div>
        
        <div class="form-group">        
          <label class="control-label col-sm-3">Contact No. <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
          	<div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="contactnum" id="contactnum" value="';echo $contactno1;echo '" >
            </div>
          </div>
        </div>
         <div class="form-group">        
          <label class="control-label col-sm-3">Description. <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
          	<div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="description" id="contactnum" value="';echo $description1;echo '" >
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
	  <form class="form-horizontal" method="post" name="signup" id="signup" action="psavset2.php">        
        
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