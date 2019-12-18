<!DOCTYPE html>
<?php
session_start();
ob_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>BMSCE HOSTELS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name = "description" content ="student projects,internships">
<meta name = "keywords" content ="startups,india,internships,projects,bangalore,part time,students">
<link rel="icon" href="ikon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="g1.css">
  <style>
  table#to1{
	display:-webkit-box;
	border-spacing: 2px;
	float:center;
	margin-left:500px;
}
table#t01 tr:nth-child(even) {
	  padding: 15px;
    background-color: #eee;
	-webkit-box-flex:1;
	
}
table#t01 tr:nth-child(odd) {
	  padding: 0px,15px;
    background-color: #fff;
	-webkit-box-flex:1;
}
table#t01 th {
	margin-left:500px;
	width:300px;
    color: white;
	  padding: 15px;
	-webkit-box-flex:1;
    background-color: red;
}
table#t01 td{
	margin-left:500px;
	width:300px;
	padding:15px;
}

  	#ikon {
	margin-left:200px;
	text-align:center;
	float:left;
	width:auto;
	padding:none;
	-webkit-transition:-webkit-transform 1.2s;
}
#myCarousel{
	margin-left:200px;
	float:left;
	max-width:900px;
	max-height:600px;
	border:	2px solid white;
	-webkit-box-pack:center;
}
#ikon:hover {
	-webkit-transform: scale(1.4);
}
.col-md-8{
		margin-left:250px;
	
}
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;min-height:180px;color: #fff; background-color: black;}
  #sectiond {padding-top:50px;min-height:310px;color: #fff; background-color: white;}
  #section21 {padding-top:50px;min-height:500px;color: #fff; background-color: #673ab7; text-align: center;}
  #section22 {padding-top:50px;min-height:500px;color: #fff; background-color: #ff9800; text-align: center;}
  #section3 {padding-top:50px;min-height:500px;color: #fff; background-color: #00bcd4; text-align: center;}
  #section42 {padding-top:50px;min-height:500px;color: #fff; background-color: #009688; text-align: center;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top" id ="navi">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">BMSCE HOSTELS</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="home.php.#section1">HOME</a></li>
		   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="home.php#section21">DESCIPTION</a></li>
              <li><a href="home.php#section22">FACILITIES</a></li>
            </ul>
          </li>
          <li><a href="home.php#section3">FAQ</a></li>
         
        </ul>
		<ul class="nav navbar-nav navbar-right">
		<?php		
		
if((isset($_COOKIE['gav1']))&&(isset($_COOKIE['gav2']))&&(isset($_COOKIE['gav3'])) ) {
	if($_COOKIE['gav3']==1){
	echo'
<li><a href="studentdetails.php"><span class="glyphicon glyphicon-cog"></span> Details</a></li>
	<li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>';}
	else if($_COOKIE['gav3']==2){
	echo'
<li><a href="staffdetails.php"><span class="glyphicon glyphicon-cog"></span> Details</a></li>
	<li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>';}
	else{
		echo'
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ADD<span class="caret"></span></a>
            <ul class="dropdown-menu">
        <li><a href="stusignup.php"> STUDENT</a></li>
        <li><a href="stasignup.php"> STAFF</a></li>
            </ul>
          </li>
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">VIEW<span class="caret"></span></a>
            <ul class="dropdown-menu">
        <li><a href="s1.php"> STUDENT</a></li>
        <li><a href="s2.php"> STAFF BY ID</a></li>
        <li><a href="s5.php">ALL STAFF</a></li>
        <li><a href="s3.php"> HOSTEL</a></li>
		<li><a href="s4.php"> MESS</a></li>
            </ul>
          </li>
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">DELETE<span class="caret"></span></a>
            <ul class="dropdown-menu">
        <li><a href="del1.php"> STUDENT</a></li>
        <li><a href="del2.php"> STAFF</a></li>
            </ul>
          </li>
		  <li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>
          </li>';
	}
 }
 else{
	 echo'
       		<li><a>Login as : </a></li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">STUDENTS<span class="caret"></span></a>
            <ul class="dropdown-menu">
        <li><a href="studentsignin.php"><span class="glyphicon glyphicon-log-in"></span> STUDENT</a></li>
        <li><a href="staffsignin.php"><span class="glyphicon glyphicon-log-in"></span> STAFF</a></li>
        <li><a href="inchargesignin.php"><span class="glyphicon glyphicon-user"></span> INCHARGE</a></li>
            </ul>
          </li>
		  
          </li>';
 }?>
      </ul>
      </div>
	   
    </div>
  </div>
</nav>      