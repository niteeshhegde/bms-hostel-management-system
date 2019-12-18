<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<h1 color="black" align="center">BMS EDUCATIONAL TRUST HOSTELS</h1>
</div>



<div class="container">

	<div class="row">
    <div class="col-md-8">

      <section>      
        <h1 class="entry-title"><span> STAFF SIGNUP</span> </h1>
        <hr>
            <form class="form-horizontal" method="post" name="signup" id="signup" action="sav2.php">        
        <div class="form-group">
          <label class="control-label col-sm-3">STAFF ID <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="staid" id="location" placeholder="ID" >
          </div>
        </div>
        
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
          <label class="control-label col-sm-3">Full name <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="name" id="location" placeholder="name" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Contact No. <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
          	<div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="Enter your Primary contact no." >
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Email <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="email" id="location" placeholder="email" >
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Designation <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="designation" id="location" placeholder="Designation" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Account No<span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="accno" id="location" placeholder="Account No" >
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Salary<span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="salary" id="location" placeholder="Salary" >
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Address <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="address" id="location" placeholder="City" >
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="submit" type="submit" value="Sign Up" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>