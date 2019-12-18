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
        <h1 class="entry-title"><span>GET STAFF DETAILS</span> </h1>
        <hr>
            <form class="form-horizontal" method="post" name="signup" id="signup" action="hosdet1.php">        
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
          <div class="col-xs-offset-3 col-xs-10">
            <input name="submit" type="submit" value="GET DETAILS" class="btn btn-primary">
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