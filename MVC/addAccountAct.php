<?php
$userName = $_POST['id'];
$passWord = $_POST['pwd'];

if($userName){
	if($passWord){
		$sql = "INSERT INTO `user`(`loginID`, `password`) VALUES ('$userName','$passWord')";
		$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
		$msg = "Account Added";
		header("Location: addaccount.php?m=$msg");	
	}else{
		$msg = "You must set a password";
		header("Location: addaccount.php?m=$msg");
	}
}else{
	$msg = "You must have User Name";
	header("Location: addaccount.php?m=$msg");
}

?>
