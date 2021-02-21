<?php
function addpro($data,$img){
//        var_dump($data);die();
    $connection = config();
    $sql = "INSERT INTO product_tbl (title, text, procat, img) VALUES ('$data[title]','$data[text]','$data[procat]','$img')";
    mysqli_query($connection, $sql);
}

function procat(){
    $connection=config();
    $sql = "SELECT * FROM products_cat";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function listProAdmin(){
    $connection = config();
    $sql = "SELECT * FROM product_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function selectProCat($catid){
    $connection = config();
    $sql = "SELECT * FROM products_cat WHERE id=$catid";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res['title'];
}
//
function deletePro($id){
    $connection = config();
    $sql = "DELETE FROM product_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
}

function showEditPro($id){
    $connection = config();
    $sql = "SELECT * FROM product_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function editPro($data, $id, $img, $oldpic){
//    die($oldpic);
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldpic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic= uploader($img, "../images/products/",$folder,"product");
    }
    else {
        $pic=$oldpic;
    }
//    var_dump($data);
//    var_dump($id);
//    die();
    $connection = config();
    $sql = "UPDATE product_tbl SET title='$data[title]',text='$data[text]',procat='$data[procat]', img='$pic' WHERE id='$id'";
    mysqli_query($connection, $sql);
}

function listProDefault(){
    $connection = config();
    $sql = "SELECT * FROM product_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}
//
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
