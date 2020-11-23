<?php
session_start();
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
    header("Location: loginForm.php");
}
$name = $_SESSION['uID'];
require_once("dbconnect.php");

$sql = "select *, kind from exam where name='$name';";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
    <h1>my application !! </h1>
    <hr>
    <table border="1">
        <tr>
            <td>申請人（學生）</td>
            <td>學號</td>
            <td>father</td>
            <td>mother</td>
            <td>申請補助種類</td>
        </tr>
        <?php
        while ($rs=mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$rs['name']."</td>";
            echo "<td>" , $rs['sid'], "</td>";
            echo "<td>" , $rs['f-name'], "</td>";
            echo "<td>" , $rs['m-name'] , "</td>";
            echo "<td>", $rs['kind'], "</td></tr>";
            if ($rs['t-signature'] == 0) {
                $status = "申請處理中，導師尚未簽章";
            } else if ($rs['s-signature'] == 0) {
                $status = "申請處理中，秘書尚未簽章";
            } else if ($rs['p-signature'] == 0) {
                $status = "申請處理中，校長尚未簽章";
            } else {
                $status = "申請已完成";
            }
        }
        ?>
    </table>
    <br>
    <?php
    echo $status;
    ?>
    <hr><a href="loginForm.php">logout</a><br><a href="../applyform.php">add new applicatrion</a>
    </body>
</html>