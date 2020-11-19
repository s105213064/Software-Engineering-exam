<?php
require("dbconnect.php");
$sign=mysqli_real_escape_string($conn,$_POST['psignature']);
$id=(int)$_POST['id'];
echo $id;

	$sql = "update exam set `p-signature`=$sign where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL


header("Location: todoListView.php");
?>