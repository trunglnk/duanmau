<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm){
    $sql="insert into sanpham(name, price, image, detail, id_danhmuc) values('$tensp' , '$giasp' , '$hinh', '$mota', '$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id){
    $sql = "delete from sanpham where id=".$id;
    pdo_execute($sql);
}

function loadall_sanpham(){
    $sql = "select * from sanpham order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id){
    $sql = "select * from sanpham where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_sanpham($id, $tenLoai){
    $sql="update sanpham set name='".$tenLoai."' where id=".$id;
    pdo_execute($sql);
}