<?php
include "header.php";
include "slider.php";
include "class/product_class.php";



?>
<?php
    $product = new Product();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartegory_id = $_POST['cartegory_id'];
    $brand_id = $_POST['brand_id'];
    $product_price = $_POST['product_price'];
    $product_price_new = $_POST['product_price_new'];
    $product_desc = $_POST['product_desc'];
    $product_img = $_POST['product_img'];


 
}


?>
<?php
$product = new product();
$show_product = $product->show_product();



?>
<style >
    
    .right-cartegory-list h1{
        text-align:center;

    }
    .right-cartegory-list table tr:first-child{
        background-color: #007bff;
        height: 50px;

    }
    .right-cartegory-list table tr:first-child th{
        color: #fff;
    }
</style>
<div class="admin-content-right">
    <div class="right-cartegory-list">
        <h1>Danh sách sản phẩm</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Danh mục</th>
                <th>Giá </th>
                <th>Tùy biến</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>Quần tây</td>
                <td><img src="#" alt=""></td>
                <td>Quần</td>
                <td>Nam</td>
                <td>1.000.000 <sup>đ</sup> </td>
                <td><a href="">Sửa</a>| <a href="">Xóa</a></td>
            </tr>
        </table>
    </div>
</div>


</section>

</body>

</html>