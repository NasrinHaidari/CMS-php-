<?php
function addcontact($data){
//        var_dump($data);die();
    $connection = config();
    $sql = "INSERT INTO contact_tbl (name , text, subject, email) VALUES ('$data[name]','$data[text]','$data[subject]','$data[email]')";
    mysqli_query($connection, $sql);
}

//function newscat(){
//    $connection=config();
//    $sql = "SELECT * FROM news_cat";
//    $row = mysqli_query($connection, $sql);
//    while ($res = mysqli_fetch_assoc($row)) {
//        $result[] = $res;
//    }
//    return $result;
//}
//
function listcontactAdmin(){
    $connection = config();
    $sql = "SELECT * FROM contact_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}
//
//function selectNewsCat($catid){
//    $connection = config();
//    $sql = "SELECT * FROM news_cat WHERE id=$catid";
//    $row = mysqli_query($connection, $sql);
//    $res = mysqli_fetch_assoc($row);
//    return $res['title'];
//}
////
function deleteContact($id){
    $connection = config();
    $sql = "DELETE FROM contact_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
}

function showDetail($id){
    $connection = config();
    $sql = "SELECT * FROM contact_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}
//
//function editNews($data, $id, $img, $oldpic){
////    die($oldpic);
//    if($_FILES[$img]['name']!=''){
//        $a=explode("/",$oldpic);
//        $total=count($a);
//        $folder=$a[$total-2];
//        $pic= uploader($img, "../images/news/",$folder,"news");
//    }
//    else {
//        $pic=$oldpic;
//    }
////    var_dump($data);
////    var_dump($id);
////    die();
//    $connection = config();
//    $sql = "UPDATE contact_tbl SET title='$data[title]',text='$data[text]',news_cat='$data[news_cat]', img='$pic' WHERE id='$id'";
//    mysqli_query($connection, $sql);
//}
//
//function listNewsDefault(){
//    $connection = config();
//    $sql = "SELECT * FROM contact_tbl";
//     $row = mysqli_query($connection, $sql);
//    while ($res = mysqli_fetch_assoc($row)) {
//        $result[] = $res;
//    }
//    return $result;
//}
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
