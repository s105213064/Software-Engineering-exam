<?php
require_once("dbconnect.php");

function checkUserIDPwd($userName, $passWord) {
    global $conn;
    $userName = mysqli_real_escape_string($conn,$userName);
    $isValid = false;

    $sql = "SELECT password FROM user WHERE loginID='$userName'";
    if ($result = mysqli_query($conn,$sql)) {
        if ($row=mysqli_fetch_assoc($result)) {
            if ($row['password'] == $passWord) {
                //keep the user ID in session as a mark of login
                //$_SESSION['uID'] = $row['id'];
                //provide a link to the message list UI
                $isValid = true;
            }
        }
    }
    return $isValid;
}

function hasdata($userName) {
    global $conn;
    $userName = mysqli_real_escape_string($conn,$userName);
    $sql = "SELECT * FROM exam WHERE name='$userName'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num == false) { // 沒有資料
        return true;
    }
    return false;
}

function getUserPwd() {
    global $conn;
    $sql = "select * from user;";
    $result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
    return $result;
}

function setUserPassword($userName){
    return false;
}

?>










