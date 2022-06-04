<?php

    function insert_danhmuc($tenLoai){
        $sql="insert into danhmuc(name) values('$tenLoai')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }

    function loadall_danhmuc(){
        $sql = "select * from danhmuc order by id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone_danhmuc($id){
        $sql = "select * from danhmuc where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id, $tenLoai){
        $sql="update danhmuc set name='".$tenLoai."' where id=".$id;
        pdo_execute($sql);
    }