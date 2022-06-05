<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";
    //controller

    //kiem tra ton tai
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'add-dm':
            //kiem tra ng dung co click add k
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenLoai = $_POST['tenloai'];
                    insert_danhmuc($tenLoai);
                    $thongbao = "Thêm thành công";
                }

            include "danhmuc/add-dm.php";
                break;

            case 'view-dm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/view-dm.php";
                break;

            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/view-dm.php";
                break;

            case 'suadm':
             if(isset($_GET['id'])&&($_GET['id']>0)) {
                 $dm = loadone_danhmuc($_GET['id']);
             }
                include "danhmuc/update.php";
                break;

              case 'update-dm':
                  if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                      $tenLoai = $_POST['tenloai'];
                      $id = $_POST['id'];
                      update_danhmuc($id, $tenLoai);
                      $thongbao = "Cập nhật thành công";
                  }
//                  $sql = "select * from danhmuc order by id desc";
                  $listdanhmuc = loadall_danhmuc();
                  include "danhmuc/view-dm.php";
                  break;

         /*Controller sản phẩm*/
            case 'add-sp':
                //kiem tra ng dung co click add k
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm = $_POST['id_danhmuc'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh =$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                       // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_sanpham($tensp, $giasp, $hinh,$mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add-sp.php";
                break;

            case 'view-sp':
                if(isset($_POST['checklist'])&&($_POST['checklist'])){
                    $key = $_POST['key'];
                    $iddm = $_POST['id_danhmuc'];
                }else{
                    $key = '';
                    $iddm =0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($key,$iddm);
                include "sanpham/view-sp.php";
                break;

            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham();
                include "sanpham/view-sp.php";
                break;

            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    $sp = loadone_sanpham($_GET['id']);
                }
                include "sanpham/update.php";
                break;

            case 'update-sp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenLoai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_sanpham($id, $tenLoai);
                    $thongbao = "Cập nhật thành công";
                }
//                $sql = "select * from danhmuc order by id desc";
                $listsanpham = loadall_sanpham();
                include "sanpham/view-sp.php";
                break;

                default;
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
