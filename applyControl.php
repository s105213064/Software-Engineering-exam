<?php
require("dbconnect.php");

$name = $_POST['name'];
$sid = $_POST['sid'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$kind = $_POST['kind'];


$sql = "insert into `exam` (`name`, `sid`, `f-name`, `m-name`, `kind`) values ('$name', '$sid', '$fname', '$mname', '$kind')";
mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	

header("Location: MVC/todoListView.php");
?>

