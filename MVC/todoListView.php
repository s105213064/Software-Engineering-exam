<?php
session_start();
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
    header("Location: loginForm.php");
}

require("userModel.php");

if ($_SESSION['uID']=='sudo'){
    $bossMode = 3;
} else if ($_SESSION['uID']=='teach') {
    $bossMode = 1;
} else if ($_SESSION['uID']=='sec') {
    $bossMode = 2;
} else {
    if (hasdata($_SESSION['uID'])) {
        header("Location: ../applyform.php");
    } else {
        header("Location: todoListView_s.php");
    }
}

require_once("dbconnect.php");

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
<h1>All application !! </h1>
<p><?php echo 'Hello ', $_SESSION['uID']?></p>
<hr>
<table border="1">
    <tr>
        <td>id</td>
        <td>申請人（學生）</td>
        <td>學號</td>
        <td>father</td>
        <td>mother</td>
        <td>申請補助種類</td>
        <td>導師訪視說明</td>
        <td>導師簽章</td>
        <td>秘書審查意見</td>
        <td>秘書審核簽章</td>
        <td>校長簽核</td>
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
    echo "<td>" , $rs['t-signature'];
    if ($bossMode == 1) {
        echo "<a href='tForm.php?id={$rs['ID']}'>edit</a>";
    }
    echo "</td>";
    echo "<td>" , $rs['s-comment'] , "</td>";
    echo "<td>" , $rs['s-signature'];
    if ($bossMode == 2 && $rs['t-signature'] == 1) {
        echo "<a href='sForm.php?id={$rs['ID']}'>edit</a>";
    }
    echo "</td>";
    echo "<td>" , $rs['p-signature'] ;
    if ($bossMode == 3 && $rs['t-signature'] == 1 && $rs['s-signature'] == 1) {
        echo "<a href='pForm.php?id={$rs['ID']}'>edit</a>";
    }
    echo "</td></tr>";
    }
    ?>
</table>
<hr><a href="loginForm.php">logout</a>
</body>
</html>