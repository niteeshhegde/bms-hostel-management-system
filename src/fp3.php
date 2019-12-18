<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
</div>
<div id="section21" class="container-fluid">
<?php
include 'connection.php';

if($_GET['code'])
{
	$get_stuid = $_GET['id'];
	$get_code = $_GET['code'];
	$query = "SELECT * FROM student1 WHERE stuid= ? ";
		$stmt=$conn->prepare($query);
		$stmt->bind_param('i',$a);
		$a=$get_stuid;
        $stmt->execute();
		$result= $stmt->get_result();
	
	
	while($row = mysqli_fetch_array($result))
	{
		$db_code = $row['passreset'];
		$db_stuid = $row['stuid'];
	}
	if($get_stuid == $db_stuid && $get_code == $db_code)
	{
		echo '
		<div class="row">
    <div class="col-md-8">
      <section>      
        <h1 class="entry-title"><span>New Password</span> </h1>
        <hr>
            <form class="form-horizontal" action="f4.php?code='.$get_code.'" method="POST" name="signip" id="signup" >        
        <div class="form-group">
          <label class="control-label col-sm-3"> Enter a new password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" name="newpass" class="form-control" id="password" placeholder="Enter a new password" >
            </div></div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-3">Re-enter your password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="newpass1" id="password" placeholder="Confirm Password" >
           </div>   
		   		 
          </div>

        </div>
				<input type="hidden" name="stuid" value="'.$db_stuid.'">

        
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="submit" type="submit" value="Update password" class="btn btn-primary">
          </div> 
        </div>
      </form>
    </div>
</div>
		


		';
	}
	else{echo '<h2>Sorry ! Check if you got a new link again </h2> ';}
	
}
?>
</div>
<?php
include 'footer.php';
?>