<?php
function addnewsCat($data){
//        var_dump($data);die();
    $connection= config();
    $sql="INSERT INTO news_cat (title) VALUES ('$data[title]')";
    mysqli_query($connection, $sql);
}
function listnewscatAdmin() {
    $connection= config();
    $sql="SELECT * FROM news_cat";
    $row= mysqli_query($connection, $sql);
    while ($res= mysqli_fetch_assoc($row)) {
        $result[]= $res;
    }
    return $result;
}
function delete_news($id) {
    $connection= config();
    $sql="DELETE FROM news_cat WHERE id='$id'";
    $row= mysqli_query($connection, $sql);
}
function showEdit_Cat($id) {
    $connection= config();
    $sql="SELECT * FROM news_cat WHERE id='$id'";
    $row= mysqli_query($connection, $sql);
    $res= mysqli_fetch_assoc($row);
    return $res;
}
function edit_News($data,$id){
//    var_dump($data);
//    var_dump($id);
//    die();
    $connection= config();
    $sql="UPDATE news_cat SET title='$data[title]' WHERE id='$id'";
    mysqli_query($connection, $sql);
}