<?php
include_once "functions.php";
function user_login($data){
    $connection= config();
    $sql="SELECT * FROM admin_tbl WHERE username='$data[username]'";
    $row= mysqli_query($connection, $sql);
    $res= mysqli_fetch_assoc($row);
//    var_dump($res);
    if($res['password']==$data['password']){
//        echo "a";
        $_SESSION['username']=$res['name'];
        header("location:dashbord.php");
    } else {
//        echo "b";
        header("location:index.php?login=error");
    }
}