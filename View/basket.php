<?php
    if(isset($_SESSION['user'])) {
        ?>
        <div id="basket-zone" class="wrapper-90 no-padding margin-auto">
            <h2>My basket</h2>
        <?php
        foreach ($_SESSION['user']['basket'] as $item) {
        ?>
            <div class="item">
                <span class="name"><?php echo $item['product']['name']; ?></span>
                <input type="hidden" name="name" value="<?php echo $item['product']['name']; ?>">
                <span class="price"><?php echo $item['product']['price']." $"; ?></span>
                <input type="hidden" name="price" value="<?php echo $item['product']['price']; ?>">
                <input class="quantity" type="number" value="<?php echo $item['quantity']; ?>">
            </div>
        <?php
        }
        ?>
        </div>
        <div class="wrapper-50 margin-auto center">
            <a class="submit-btn">Save</a>
            <a class="submit-btn">Pay</a>
        </div>
        <?php

    }
    else {
        header("Location: ./index.php?ctrl=user&action=login");
    }
?>
