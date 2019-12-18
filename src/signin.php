<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >



<div class="container">
<div class="row">
    <div class="col-md-8">
      <section>      
        <h1 class="entry-title"><span>StartUp SignIn</span> </h1>
        <hr>
            <form class="form-horizontal" method="post" name="signin" id="signup"  action="login.php">        
        <div class="form-group">
          <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" >
            </div></div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-3">Password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" >
           </div>   
		   		 
          </div>

        </div>

        
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
		  		  				<input type="hidden" name="ss" value="2">
            <input name="submit" type="submit" value="submit" class="btn btn-primary">
			<small ><a href='fpstart.php'>  &#160;	&#160;	Forgot Password ?</a></small> 
          </div> 
        </div>
      </form>
    </div>
</div>
	<div class="row">
    <div class="col-md-8">
	<h1 class="entry-title"><span><br />OR<br /></span> </h1>
      <section>      
        <h1 class="entry-title"><span>Sign Up</span> </h1>
        <hr>
            <form class="form-horizontal" action="signup_ac.php" method="post" name="signup" id="signup" >        
        <div class="form-group">
          <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="">
            </div>
            <small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-3" >Set Password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password1" id="password" placeholder="Choose password (5-15 chars)" value="">
           </div>   
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password2" id="cpassword" placeholder="Confirm your password" value="">
            </div>  
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Startup Name <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="startupname" id="mem_name" placeholder="Enter your Name here" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Contact No. <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
          	<div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="Enter your Primary contact no." value="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Alternate No. <br>
          <small>(if any)</small></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="Any other or Landline no (if any)" value="">
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Describe your Startup <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <textarea rows="10" cols="30" class="form-control" name="description" id="description" placeholder="Desciption" value=""></textarea>
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Location <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="city" id="location" placeholder="City" value="">
          </div>
        </div>
        
        
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="Submit" type="submit" value="Sign Up" class="btn btn-primary">
          </div>
        </div>
      </form>
	        
    </div>
</div>
</div>
<?php
include 'footer.php';
?>