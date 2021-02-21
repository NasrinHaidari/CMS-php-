<?php
function addnews($data,$img){
//        var_dump($data);die();
    $connection = config();
    $sql = "INSERT INTO news_tbl (title, text, news_cat, img, date) VALUES ('$data[title]','$data[text]','$data[news_cat]','$img','$data[date]')";
    mysqli_query($connection, $sql);
}

function newscat(){
    $connection=config();
    $sql = "SELECT * FROM news_cat";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function listnewsAdmin(){
    $connection = config();
    $sql = "SELECT * FROM news_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function selectNewsCat($catid){
    $connection = config();
    $sql = "SELECT * FROM news_cat WHERE id=$catid";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res['title'];
}
//
function deletenews($id){
    $connection = config();
    $sql = "DELETE FROM news_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
}

function showEditNews($id){
    $connection = config();
    $sql = "SELECT * FROM news_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function editNews($data, $id, $img, $oldpic){
//    die($oldpic);
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldpic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic= uploader($img, "../images/news/",$folder,"news");
    }
    else {
        $pic=$oldpic;
    }
//    var_dump($data);
//    var_dump($id);
//    die();
    $connection = config();
    $sql = "UPDATE news_tbl SET title='$data[title]',text='$data[text]',news_cat='$data[news_cat]', img='$pic' WHERE id='$id'";
    mysqli_query($connection, $sql);
}

function listNewsDefault(){
    $connection = config();
    $sql = "SELECT * FROM news_tbl";
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
