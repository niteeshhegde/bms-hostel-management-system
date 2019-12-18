<?php
$seconds = -10 +time();
setcookie('gav1',$_SESSION['gav11'],$seconds);
setcookie('gav2',$_SESSION['gav12'],$seconds);
setcookie('gav3',$_SESSION['gav13'],$seconds);
header("location:home.php");
?>