<div class="row">
    <div class="row formtitle"><h1>Danh sách danh mục</h1></div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
                <?php
                    foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        //sua danh muc
                        $suadm = "index.php?act=suadm&id=".$id;
                        $xoadm = "index.php?act=xoadm&id=".$id;
                        echo ' <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>
                    <a href="'.$suadm.'"><input type="button" value="Sửa"></a> 
                    <a href="'.$xoadm.'"><input type="button" value="Xoá"></a></td>
                </tr>';
                    }
                ?>

            </table>
        </div>
        <div class="row mb 10"></div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
            <a href="index.php?act=add-dm"><input type="button" value="Thêm mới"></a>
        </div>
    </div>
</div>
