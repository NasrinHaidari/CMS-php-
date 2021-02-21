<?php
function add_page($data){
//        var_dump($data);die();
    $connection = config();
    $sql = "INSERT INTO page_tbl (title, keywords, description, body) VALUES ('$data[title]','$data[keywords]','$data[description]','$data[body]')";
    mysqli_query($connection, $sql);
}

function list_page_admin(){
    $connection = config();
    $sql = "SELECT * FROM page_tbl";
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
//
function delete_page($id){
    $connection = config();
    $sql = "DELETE FROM page_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
}

function show_edit_page($id){
    $connection = config();
    $sql = "SELECT * FROM page_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function edit_page($data, $id){
    $connection = config();
    $sql = "UPDATE page_tbl SET title='$data[title]',body='$data[body]',keywords='$data[keywords]',description='$data[description]'WHERE id='$id'";
    mysqli_query($connection, $sql);
}

function detail_page($id){
    $connection = config();
    $sql = "SELECT * FROM page_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}
