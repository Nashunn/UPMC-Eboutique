<?php
    if(isset($_SESSION['user'])) {
        if (isset($product) && !empty($product)) {
            ?><p>TODO : Add to basket</p> Product : <?php
            echo $product;
        }
    ?>
        <p>TODO : basket</p>
        <p><?php print_r($_SESSION['user']['basket']); ?></p>
    <?php
    }
    else {
        header("Location: ./index.php?ctrl=user&action=login");
    }
?>
