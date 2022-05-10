<?php
include "class/cartegory_class.php";
$cartegory = new cartegory();
if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == null) {
    echo "<script> window.location = 'cartegorylist.php'</script>"; 
}
else{
    $cartegory_id = $_GET['cartegory_id'];
}

    $deldete_cartegory = $cartegory -> delete_cartegory($cartegory_id);

?>
