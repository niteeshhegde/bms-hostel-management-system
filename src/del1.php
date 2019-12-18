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
        <h1 class="entry-title"><span>DELETE STUDENTS</span> </h1>
        <hr>
            <form class="form-horizontal" method="post" name="signup" id="signup" action="studel.php">        
        <div class="form-group">
          <label class="control-label col-sm-3">STUDENT ID <span class="text-danger">*</span><br></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="stuid" id="location" placeholder="ID" >
          </div>
        </div>
        
        
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="submit" type="submit" value="DELETE" class="btn btn-primary">
          </div>
        </div>
      </form>
	  	<br><br><br><br><br><br><br><br><br><br><br>
    </div>

</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>