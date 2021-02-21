<?php
function file_uploader($file){
    $file=$_FILES[$file];
    $size=$file['size'];
//    var_dump($file);
//    var_dump($dir);
    $filename=$file['name'];
    $array=explode(".",$filename);
//    var_dump($array);die();
    $ext= end($array);
    $newname="file_".rand().".".$ext;
    $from=$file['tmp_name'];
    $to="uploader/upload"."/".$newname;
    move_uploaded_file($from,$to);
    return $a=array($to, $size);
}

function add_file($data,$img,$size){
//        var_dump($data);die();
    $connection = config();
    $sql = "INSERT INTO uploader_tbl (title, img, size) VALUES ('$data[title]','$img','$size')";
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

function list_file(){
    $connection = config();
    $sql = "SELECT * FROM uploader_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

//function selectNewsCat($catid){
//    $connection = config();
//    $sql = "SELECT * FROM news_cat WHERE id=$catid";
//    $row = mysqli_query($connection, $sql);
//    $res = mysqli_fetch_assoc($row);
//    return $res['title'];
//}
////
//function deletenews($id){
//    $connection = config();
//    $sql = "DELETE FROM uploader_tbl WHERE id='$id'";
//    $row = mysqli_query($connection, $sql);
//}
//
//function showEditNews($id){
//    $connection = config();
//    $sql = "SELECT * FROM uploader_tbl WHERE id='$id'";
//    $row = mysqli_query($connection, $sql);
//    $res = mysqli_fetch_assoc($row);
//    return $res;
//}
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
//    $sql = "UPDATE uploader_tbl SET title='$data[title]',text='$data[text]',news_cat='$data[news_cat]', img='$pic' WHERE id='$id'";
//    mysqli_query($connection, $sql);
//}
//
//function listNewsDefault(){
//    $connection = config();
//    $sql = "SELECT * FROM uploader_tbl";
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
