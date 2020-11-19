<?php
session_start();
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
	header("Location: loginForm.php");
} 
if ($_SESSION['uID']=='sudo'){
	$bossMode = 1;
} else {
	$bossMode=0;
}

$sql = "select * from exam where 1;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>my application !! </p>
<hr>
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>name</td>
    <td>sID</td>
    <td>father</td>
    <td>mother</td>
    <td>kind</td>
    <td>teacher_description</td>
    <td>teacher_status</td>
    <td>秘書_description</td>
    <td>秘書_status</td>
    <td>校長_status</td>
  </tr>
<?php
while ($rs=mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $rs['ID'] . "</td>";
  echo "<td>".$rs['name']."</td>";
  echo "<td>" , $rs['sid'], "</td>";
  echo "<td>" , $rs['f-name'], "</td>";
  echo "<td>" , $rs['m-name'] , "</td>";
  echo "<td>", $rs['kind'], "</td>";
  echo "<td>" , $rs['t-comment'] , "</td>";
  echo "<td>" , $rs['t-signature'] , "</td>";
  echo "<td>" , $rs['s-comment'] , "</td>";
  echo "<td>" , $rs['s-signature'] , "</td>";
  echo "<td>" , $rs['p-signature'] , "</td>";
}
?>
</table>
<a href="todoAddForm.php">Add Task</a> 
<br><a href="todoComplete.php">Complete Task</a>
</body>
</html>
