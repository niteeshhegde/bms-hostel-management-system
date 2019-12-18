<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
</div>

<div id="section21" class="container-fluid">

<div class="container">
<div class="row">
    <div class="col-md-8">
      <section>      
        <h1 class="entry-title"><span>FORGOT PASSWORD</span> </h1>
        <hr>
            <form class="form-horizontal" method="post" name="signip" id="signup"  action="sfp2.php">        
        <div class="form-group">
          <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" >
            </div></div>
        </div>
		<div class="col-xs-offset-3 col-xs-10">
            <input name="submit" type="submit" value="submit" class="btn btn-primary">
          </div>
        

        </div>

        
        
      </form>
    </div>
</div>
	
</div>
</div>
<?php
include 'footer.php';
?>