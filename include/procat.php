<?php
function addProductCat($data,$file){
//        var_dump($data);die();
    $connection= config();
    uploader();

    $sql="INSERT INTO products_cat (title,sort,status) VALUES ('$data[title]','$data[sort]','$data[status]')";
    mysqli_query($connection, $sql);
}
function listProcatAdmin() {
    $connection= config();
    $sql="SELECT * FROM products_cat";
    $row= mysqli_query($connection, $sql);
    while ($res= mysqli_fetch_assoc($row)) {
        $result[]= $res;
    }
    return $result;
}
function deleteProcat($id) {
    $connection= config();
    $sql="DELETE FROM products_cat WHERE id='$id'";
    $row= mysqli_query($connection, $sql);
}
function showEditCat($id) {
    $connection= config();
    $sql="SELECT * FROM products_cat WHERE id='$id'";
    $row= mysqli_query($connection, $sql);
    $res= mysqli_fetch_assoc($row);
    return $res;
}
function editProcat($data,$id){
//    var_dump($data);
//    var_dump($id);
//    die();
    $connection= config();
    $sql="UPDATE products_cat SET title='$data[title]',sort='$data[sort]',status='$data[status]' WHERE id='$id'";
    mysqli_query($connection, $sql);
}