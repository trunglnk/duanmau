<?php
    if(is_array($dm)){
        extract($dm);
    }

?>
<div class="row">
    <div class="row formtitle"><h1>Cập nhật sản phẩm</h1></div>
    <div class="row formcontent">
        <form action="index.php?act=update-sp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Mã sản phẩm
                <input type="text" name="masp" disabled>
            </div>
            <div class="row mb10">
                Tên sản phẩm
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                Giá
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                Hình ảnh
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                Mô tả
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=view-sp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>
