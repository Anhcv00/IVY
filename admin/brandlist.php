<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";



?>

<?php
$brand = new brand();
$show_brand = $brand->show_brand();
?>
<?php
$brand = new brand();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartegory_id = $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];
    $insert_brand = $brand->insert_brand($cartegory_id, $brand_name);
}


?>
<style>
    select {
        height: 30px;
        width: 200px;
    }

    form {
        margin-top: 12px;
    }
</style>


<div class="admin-content-right">
    <div class="admin-content-right">
        <div class="right-cartegory-add">
            <h1>Thêm loại sản phẩm</h1>
            <form action="" method="POST">
                <select name="cartegory_id" id="">
                    <option value="#">-- Chọn danh mục --</option>
                    <?php
                    $show_cartegory = $brand->show_cartegory();
                    if ($show_cartegory) {
                        while ($result = $show_cartegory->fetch_assoc()) {

                    ?>
                            <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select> <br>
                <input required type="text" name="brand_name" id="" placeholder="Nhập tên loại sản phẩm">
                <button type="submit">
                    Thêm
                </button>
            </form>

        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="right-cartegory-list" style="border: 1px solid #dddddd;">
            <!-- <h1>Danh sách danh mục : </h1> -->
            <table style="margin-top: 0px">
                <tr style="background-color: #007bff; height: 50px; font-size: 18px; border-bottom: none;">
                    <th style="color: white;">STT</th>
                    <th style="color: white;">ID</th>
                    <th style="color: white;">Danh mục</th>
                    <th style="color: white;">Loại sản phẩm</th>
                    <th style="color: white;">Tùy biến</th>
                </tr>
                <?php
                if ($show_brand) {
                    $i = 0;
                    while ($result = $show_brand->fetch_assoc()) {
                        $i++;

                ?>
                        <tr style="font-size: 16px; height: 30px">
                            <td style="font-weight: bold;"><?php echo $i ?> </td>
                            <td><?php echo $result['brand_id'] ?></td>
                            <td><?php echo $result['cartegory_name'] ?></td>
                            <td style="text-transform: uppercase;"><?php echo $result['brand_name'] ?></td>
                            <td>
                                <a style="color: #007bff; font-weight: bold;" href="brandedit.php?brand_id=<?php echo $result['brand_id']  ?>">Sửa</a>
                                |
                                <a style="color: red; font-weight: bold;" href="branddelete.php?brand_id=<?php echo $result['brand_id']  ?>">Xóa</a>
                            </td>

                        </tr>

                <?php

                    }
                }
                ?>
                <div class="top" style="padding: 12px 12px; background-color: rgba(0,0,0,.03); border: 1px solid rgba(0,0,0,.125); height: 50px">
                    <a> Số lượng danh mục:
                        <?php
                        if ($i == 0) {
                            echo "Chưa có danh mục nào";
                        } else {
                            echo $i;
                        }
                        ?>
                    </a>
                </div>
            </table>
        </div>
    </div>
</div>


</section>

</body>

</html>