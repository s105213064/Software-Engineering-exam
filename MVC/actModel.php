<?php
require_once("dbconnect.php");

function tsignatureok($ID) {
	global $conn;
	$sql = "update exam set `t-signature` = 1 where ID = $ID and `t-signature` = 0;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function tsignaturenotok($ID) {
	global $conn;
	$sql = "update exam set `t-signature` = 2 where ID = $ID and `t-signature` = 0;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function ssignatureok($ID) {
	global $conn;
	$sql = "update exam set `s-signature` = 1 where ID = $ID and `s-signature` = 0;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function ssignaturenotok($ID) {
	global $conn;
	$sql = "UPDATE `exam` SET `s-signature`= 2  WHERE ID = $ID AND `s-signature` = 0;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function psignatureok($ID) {
	global $conn;
	$sql = "update exam set `p-signature` = 1 where ID = $ID and `p-signature` = 0;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function psignaturenotok($ID) {
	global $conn;
	$sql = "update exam set `p-signature` = 2 where ID = $ID and `p-signature` =0;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function updatetcomment($ID,$comment) { 
	global $conn;
	$sql = "update exam set `t-comment`='$comment' where id=$ID;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}

function updatescomment($ID,$comment) { 
	global $conn;
	$sql = "update exam set `s-comment`='$comment' where id=$ID;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
}
?>