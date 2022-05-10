<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
    $product = new product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Nhận dư liệu thêm sản phẩm
          // var_dump($_POST, $_FILES); 
        

        $insert_product = $product->insert_product($_POST , $_FILES);
        
    }

?>

<div class="admin-content-right">
    <div class="right-product-add">
        <h1>Thêm sản phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nhập tên sản phẩm <span style="color:red">*</span> </label>
            <input name="product_name" required type="text" name="" id="" placeholder="Nhập tên sản phẩm">
            <label for="">Chọn danh mục sản phẩm <span style="color:red">*</span> </label>
            <select name="cartegory_id" id="cartegory_id">
            <option value="#">-- Chọn --</option>
            <?php 
                    $show_cartegory = $product -> show_cartegory();
                    if ($show_cartegory) {
                        while ($result = $show_cartegory -> fetch_assoc()) {

                   
                ?>
                <option value=" <?php echo $result['cartegory_id'] ?> "><?php echo $result['cartegory_name'] ?></option>
              <?php
                   }
                }
              ?>
            </select>
            <label for="">Chọn loại sản phẩm <span style="color:red">*</span> </label>
            <select name="brand_id" id="brand_id">
                <option value="#">-- Chọn --</option>
                <?php 
                    $show_brand = $product -> show_brand();
                    if ($show_brand) {
                        while ($result = $show_brand -> fetch_assoc()) {

                   
                ?>
                <option value=" <?php echo $result['brand_id'] ?> "><?php echo $result['brand_name'] ?></option>
              <?php
                   }
                }
              ?>
            </select>
            <label for="">Nhập giá sản phẩm <span style="color:red">*</span> </label>
            <input name="product_price" required type="text" placeholder="Nhập giá sản phẩm ...">
            <label for="">Nhập giá khuyến mãi<span style="color:red">*</span> </label>
            <input name="product_price_new" required type="text" placeholder="Giá khuyến mãi ...">
            <label for="">Nhập mô tả sản phẩm <span style="color:red">*</span> </label>
            <textarea require name="product_desc" id="editor1" cols="30" rows="10" placeholder="................"></textarea>
            <label for="">Chọn ảnh <span style="color:red">*</span> </label>
            <br>
            <span style="color: red; font-style: italic;"> 
              <?php if (isset($insert_product)){
                  echo $insert_product;
              } ?>
            </span>
            <input name="product_img" require multiple type="file">
            <label for="">Chọn ảnh mô tả <span style="color:red">*</span> </label>
            <input name="product_img_desc[]" multiple="multiple" type="file">
            <button multiple type="submit"> + Thêm</button>
        </form>
    </div>
</div>
</section>
</body>
<script>
  CKEDITOR.replace( 'editor1', {
	filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
} );
</script>
<script>
  $(document).ready(function(){
    $("#cartegory_id").change(function(){
      // alert($this.val());
      var x = $(this).val();
      $.get("product_ajax.php",{cartegory_id:x},function(data){
          $("#brand_id").html(data);
      })
    })
  })
</script>
</html>