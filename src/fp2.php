<?php
include 'head1.php';
?>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >
</div>
<div id="section21" class="container-fluid">
<?php
include 'connection.php';
$email= $_POST['emailid'];
$query = "SELECT emailid, stuid FROM student1 WHERE emailid = ?";
$stmt=$conn->prepare($query);
		$stmt->bind_param('s',$email);
        $stmt->execute();
		$result= $stmt->get_result();

	if(!$result){
	die(mysqli_error($conn));
	
}
else
{
	$numrow = mysqli_num_rows($result);
	if($numrow!=0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$stuid = $row['stuid'];
			$db_email = $row['emailid'];
		}
		if($email == $db_email)
		{
	
			$code = rand(10000,1000000);
			
			$to = $db_email;
			$subject = "Password Reset";
			$body = "
			
			This is an automated email. Please DO NOT reply to this email.
			
			Click the link below or paste it into your browser
			
			http:/localhost/gav/fp3.php?code=$code&id=$stuid
			
			";
			
			$query2="UPDATE student1 SET passreset= ? WHERE stuid= ?";
			$stmt=$conn->prepare($query2);
		$stmt->bind_param('si',$a,$b);
		$a=$code;
		$b=$stuid;
		$stmt->execute();
		
			mail($to,$subject,$body);
			
			echo "<h1>Check your mailbox. A confirmation mail is sent.</h1> <h3> *Please check in promotions, social, updates, spam and in all categories if the mail didnot land in primary mailbox.</h3>";
		}
		else
		{
			echo "Email is incorrect";	
		}
	}
	else
	{
		echo "That username doesnt exist";	
	}
}
?>
</div>
<?php
include 'footer.php';
?>