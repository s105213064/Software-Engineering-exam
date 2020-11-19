<?php
require("dbconnect.php");
$comment=mysqli_real_escape_string($conn,$_POST['comment']);
$sign=mysqli_real_escape_string($conn,$_POST['sign']);
$id=(int)$_POST['id'];
echo $id;
if ($comment) { //if title is not empty
	$sql = "update exam set `s-comment`='$comment', `s-signature`=$sign where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg="Message updateded";
} else {
	$msg= "Message title cannot be empty";
}
header("Location: todoListView.php");
?>