<?php
include "class/brand_class.php";
$brand = new brand();
if(!isset($_GET['brand_id']) || $_GET['brand_id'] == null) {
    echo "<script> window.location = 'brandlist.php'</script>"; 
}
else{
    $brand_id = $_GET['brand_id'];
}

    $deldete_brand = $brand -> delete_brand($brand_id);

?>
