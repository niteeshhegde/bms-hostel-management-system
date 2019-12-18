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
        <h1 class="entry-title"><span> STUDENT SIGNUP</span> </h1>
        <hr>
            <form class="form-horizontal" method="post" name="signup" id="signup" action="sav1.php">        
        <div class="form-group">
          <label class="control-label col-sm-3">STUDENT ID <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="stuid" id="location" placeholder="ID" >
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
          <label class="control-label col-sm-3">Department<span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="dept" id="location" placeholder="Department" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Sem <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="sem" id="location" placeholder="sem" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Father's Name <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="father" id="location" placeholder="Father's Name" >
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Parent's No<span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="parno" id="location" placeholder="Parents No" >
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Address <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="address" id="location" placeholder="City" >
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Blood Group<span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="blood" id="location" placeholder="Blood Group" >
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Hostel <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <select class="form-control" name="hostel" id="location" placeholder="Hostel" >
			<option value="1">National Boys Hostel 1</option>
			<option value="2">National Boys Hostel 2</option>
			<option value="3">National Boys Hostel 3</option>
			<option value="4">Girls Hostel 1</option>
			<option value="5">Girls Hostel 2</option>
			<option value="6">International Hostel</option>
			</select>
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Room No <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="room" id="location" placeholder="Room No" >
          </div>
        </div>
		<div class="form-group">
          <label class="control-label col-sm-3">Mess <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
                        <select class="form-control" name="mess" id="location" placeholder="mess" >
			<option value="1">Veg</option>
			<option value="2">Non Veg</option>
			</select>
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