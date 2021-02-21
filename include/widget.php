<?php
function add_widget($data,$img){
//        var_dump($data);die();
    $connection = config();
    $sql = "INSERT INTO widget_tbl (title, text, img) VALUES ('$data[title]','$data[text]','$img')";
    mysqli_query($connection, $sql);
}

function list_widget_Admin(){
    $connection = config();
    $sql = "SELECT * FROM widget_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function delete_widget($id){
    $connection = config();
    $sql = "DELETE FROM widget_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
}

function showEdit_widget($id){
    $connection = config();
    $sql = "SELECT * FROM widget_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function edit_widget($data, $id, $img, $oldpic){
//    die($oldpic);
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldpic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic= uploader($img, "images/widget/",$folder,"widget");
    }
    else {
        $pic=$oldpic;
    }
//    var_dump($data);
//    var_dump($id);
//    die();
    $connection = config();
    $sql = "UPDATE widget_tbl SET title='$data[title]',text='$data[text]',img='$pic' WHERE id='$id'";
    mysqli_query($connection, $sql);
}

function list_widget_Default(){
    $connection = config();
    $sql = "SELECT * FROM widget_tbl";
     $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

//function listSubMenuDefault($id){
//    $connection = config();
//    $sql = "SELECT * FROM menu_tbl WHERE status='1' AND chid='$id' ORDER BY sort ASC";
//    $row = mysqli_query($connection, $sql);
//    if (mysqli_num_rows($row) > 0) {
//        while ($res = mysqli_fetch_assoc($row)) {
//            $result[] = $res;
//        }
//        return $result;
//    }
//}
