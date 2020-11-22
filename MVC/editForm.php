<?php
session_start();
require("dbconnect.php");
$id = (int)$_GET['id'];
$act =$_GET['act']; //who's action teacher or secretary
$sql = "select * from exam where id = $id;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
$rs=mysqli_fetch_assoc($result);
if (! $rs) {
	echo "no data found";
	exit(0);
}
if ($act == 'tcomment'){
  $who = 'teacher';
  $whos = 't-comment';
}if ($act == 'scomment'){
  $who = 'secretary';
  $whos = 's-comment';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
  <h1>Edit Status</h1>
  <form method="get" action="actControl.php">

    <input type='hidden' name='id' value='<?php echo $id ?>&'>

    <input type='hidden' name='act' value='<?php echo $act ?>'>

    <?php echo $who?> comment: <input name="comment" type="text" id="comment" value="<?php echo htmlspecialchars($rs[$whos]);?>" /> <br>

      <input type="submit" name="Submit" value="送出" />
  </form>
</body>
</html>