<div class="row">
    <div class="row formtitle mb"><h1>DANH SÁCH SẢN PHẨM</h1></div>
    <form action="index.php?act=view-sp" method="post">
        <input type="text" name="key" id="">
        <select name="id_danhmuc" id="">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>

        </select>
        <input type="submit" name="checklist" value="Lọc">
    </form>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH ẢNH</th>
                    <th>GIÁ TIỀN</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listsanpham as $sanpham){
                        extract($sanpham);
                        //sua danh muc
                        $suasp = "index.php?act=suasp&id=".$id;
                        $xoasp = "index.php?act=xoasp&id=".$id;
                        $hinhpath = "../upload/".$image;
                        if(is_file($hinhpath)){
                            $hinh = "<img src ='".$hinhpath."' height='80'>";
                        }else{
                            $hinh="No image";
                        }
                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$price.'</td>
                                <td>'.$view.'</td>
                                <td>
                                <a href="'.$suasp.'"><input type="button" value="Sửa"></a> 
                                <a href="'.$xoasp.'"><input type="button" value="Xoá"></a></td>
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
            <a href="index.php?act=add-sp"><input type="button" value="Thêm mới"></a>
        </div>
    </div>
</div>
