<?php
include 'head1.php';
include 'connection.php';
$pid=$_GET['id'];
$sql= 'SELECT pid,sid,startupname,startupdescription,proname,stipened,city,applyby,category,whocanapply,prodetails FROM addpro WHERE pid=?';
$g=$conn->prepare($sql);
$g->bind_param('s',$pid);
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
     /* bind result variables */
        $g->bind_result($pid,$sid,$sname,$sdesc,$proname,$stipened,$city,$applyby,$category,$whocanapply,$prodetails);

    /* fetch values */
    while ($g->fetch()) {
		
        $pid1=$pid;
		$password=$sid;
		$startupname1=$sname;
		$startupdescription1=$sdesc;
        $proname1=$proname;
        $stipened1=$stipened;
        $city1=$city;
        $applyby1=$applyby;
        $category1=$category;
        $whocanapply1=$whocanapply;
        $prodetails1=$prodetails;
	}
}
else{
			header('Location: home.php');
}
?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >


<div id= "quote"><br />Get Projects From StartUps.<br />Work Leisurely !
</div>
</div>
<?php $_SESSION['ssid']=$sid;?>
<div class="container" id="jumbocont" margin-top="10px">
  <div class="jumbotron" id="jumbo" margin-top="10px">
    <h1><?php echo $startupname1; ?></h1>   <br />
    <h2><?php echo $proname1; ?></h2>      	<br />
    <h3>Stipened[INR]:</h3><h4> <?php echo $stipened1; ?></h4><br />
	<h3>Location:</h3><h4>  <?php echo $city1; ?></h4><br />
	<h3>Apply By:</h3><h4>  <?php echo $applyby1; ?></h4><br />
	<h3>Who can apply:</h3> <p><?php echo $whocanapply1; ?></p><br />
	<h3>Project Details:</h3> <p> <?php echo $prodetails1; ?></p><br />
	<h3>Company Details:</h3> <p><?php echo $startupdescription1; ?></p><br />
	<a href="apply.php?id=<?php echo $pid;?>" class="btn btn-default btn-lg btn-block">APPLY</a>  
  </div>  

</div>

<?php
include 'footer.php';
?>