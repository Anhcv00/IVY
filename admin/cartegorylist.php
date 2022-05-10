<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";



?>
<?php
$cartegory = new cartegory();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
}


?>
<?php
$cartegory = new cartegory();
$show_cartegory = $cartegory->show_cartegory();


?>
<div class="admin-content-right">
    <div class="right-cartegory-add">
        <h1>Thêm danh mục</h1>
        <form action="" method="POST">
            <input required type="text" name="cartegory_name" id="" placeholder="Nhập tên danh mục">
            <button type="submit">
                Thêm
            </button>
        </form>

    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="right-cartegory-list" style="border: 1px solid #dddddd;">
            <!-- <h1>Danh sách danh mục : </h1> -->
            <table style="margin-top: 0px">
                <tr style="background-color: #007bff; height: 50px; font-size: 18px; border-bottom: none;">
                    <th style="color: white;">STT</th>
                    <th style="color: white;">ID</th>
                    <th style="color: white;">Danh mục</th>
                    <th style="color: white;">Tùy biến</th>
                </tr>
                <?php
                if ($show_cartegory) {
                    $i = 0;
                    while ($result = $show_cartegory->fetch_assoc()) {
                        $i++;

                ?>
                        <tr style="font-size: 16px; height: 30px">
                            <td style="font-weight: bold;"><?php echo $i ?> </td>
                            <td><?php echo $result['cartegory_id'] ?></td>
                            <td><?php echo $result['cartegory_name'] ?></td>
                            <td>
                                <a style="color: #007bff; font-weight: bold;" href="cartegoryedit.php?cartegory_id=<?php echo $result['cartegory_id']  ?>">Sửa</a>
                                |
                                <a style="color: red; font-weight: bold;" href="cartegorydelete.php?cartegory_id=<?php echo $result['cartegory_id']  ?>">Xóa</a>
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