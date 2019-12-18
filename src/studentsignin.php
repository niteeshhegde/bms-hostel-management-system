<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<h1 color="black" align="center">WELCOME TO BMS EDUCATIONAL TRUST HOSTELS</h1>
</div>



<div class="container">
<div class="row">
    <div class="col-md-8">
      <section>      
        <h1 class="entry-title"><span>Student SignIn</span> </h1>
        <hr>
            <form class="form-horizontal" method="post" name="signip" id="signup"  action="studentlogin.php">        
                        <div class="form-group">
          <label class="control-label col-sm-3">STUDENT ID <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="emailid" id="location" placeholder="ID" >
          </div>
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
		  				<input type="hidden" name="ss" value="1">
            <input name="submit" type="submit" value="submit" class="btn btn-primary">
          </div> 
        </div>
      </form>
    </div>
</div>
	<div class="row">
    <div class="col-md-8" height="300px;">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</div>
</div><?php
include 'footer.php';
?>