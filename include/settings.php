<?php
function settings() {
    $connection= config();
    $sql="SELECT * FROM settings";
    $row= mysqli_query($connection, $sql);
    $res= mysqli_fetch_assoc($row);
    return $res;
}
function editsettings($data){
//    var_dump($data);
//    var_dump($id);
//    die();
    $connection= config();
    $sql="UPDATE settings SET title='$data[title]',description='$data[description]'";
    mysqli_query($connection, $sql);
}
