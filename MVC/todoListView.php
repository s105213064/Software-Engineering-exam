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
    echo "<td>" , $rs['m-name'], "</td>"; 

        $kind = $rs['kind']; // 將顯示數字改為用文字方式顯示（顯示kind欄位）
        switch($kind){
            case '1':
                echo "<td>" ,"低收入戶", "</td>";
                break;
            case '2':
                echo "<td>" ,"中低收入戶", "</td>";
                break;
            case '3':
                echo "<td>" ,"家庭突發因素", "</td>";
                break;
        }

    echo "<td>" , $rs['t-comment'];
    if ($bossMode == 1 && $rs['t-comment']!='') {
        echo "<a href='editForm.php?id={$rs['ID']}&act=tcomment'>edit</a>";
    }if($bossMode == 1 && $rs['t-comment']==''){
        echo "<a href='editForm.php?id={$rs['ID']}&act=tcomment'>give some comment</a>";
    }
    echo "</td>";  
    echo "<td>"; // 將顯示數字改為用文字方式顯示（顯示tsignature欄位）
        $tsignature = $rs['t-signature']; 
        if ($bossMode == 1 && $rs['t-signature']=='0') {
            echo "<a href='actControl.php?id={$rs['ID']}&act=tsignatureok'>OK</a><br>";
            echo "<a href='actControl.php?id={$rs['ID']}&act=tsignaturenotok'>Not Ok</a>";
        }
        switch($tsignature){
            case '1':
                echo "老師通過";
            break;
            case '2':
                echo "老師不通過";
            break;
        }
    echo "</td>";
    echo "<td>" , $rs['s-comment'];
    if ($bossMode == 2 && $rs['s-comment']!='') {
        echo "<a href='editForm.php?id={$rs['ID']}&act=scomment'>edit</a>";
    }if($bossMode == 2 && $rs['s-comment']==''){
        echo "<a href='editForm.php?id={$rs['ID']}&act=scomment'>give some comment</a>";
    }
    echo "</td>";   
    echo "<td>"; // 將顯示數字改為用文字方式顯示（顯示s-signature欄位）
    $ssignature = $rs['s-signature']; 
    if ($bossMode == 2 && $rs['s-signature']=='0') {
        echo "<a href='actControl.php?id={$rs['ID']}&act=ssignatureok'>OK</a><br>";
        echo "<a href='actControl.php?id={$rs['ID']}&act=ssignaturenotok'>Not Ok</a>";
    }
    switch($ssignature){
        case '1':
            echo "秘書通過";
        break;
        case '2':
            echo "秘書不通過";
        break;
    }
    echo "</td>";
    echo "<td>"; // 將顯示數字改為用文字方式顯示（顯示s-signature欄位）
    $psignature = $rs['p-signature']; 
    if ($bossMode == 3 && $rs['p-signature']=='0') {
        echo "<a href='actControl.php?id={$rs['ID']}&act=psignatureok'>OK</a><br>";
        echo "<a href='actControl.php?id={$rs['ID']}&act=psignaturenotok'>Not Ok</a>";
    }
    switch($psignature){
        case '1':
            echo "校長通過";
        break;
        case '2':
            echo "校長不通過";
        break;
    }
    echo "</td></tr>";
    }
    ?>
</table>
<hr><a href="loginForm.php">logout</a>
</body>
</html>