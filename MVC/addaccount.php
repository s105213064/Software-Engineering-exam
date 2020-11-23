<?php
require("userModel.php");
if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
	$msg="Welcome";
}
$act = "addaccount"
?>
<h1>Register Acocunt</h1>
<div><?php echo $msg; ?></div><hr>
<form method="post" action="addAccountAct.php">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
<input type="submit">
</form>

<a href="loginForm.php">Back</a>
