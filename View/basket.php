<?php
    if(isset($_SESSION['user'])) {
        ?>
        <!-- Basket Resume -->
        <form class="" action="index.php?ctrl=basket&action=save" method="POST">
            <div id="basket-zone" class="wrapper-90 no-padding margin-auto">
                <h2>My basket</h2>
                <?php
                if (empty($_SESSION['user']['basket'])) {?>
                    <p>Empty basket !</p>
                <?php }

                foreach ($_SESSION['user']['basket'] as $item) {
                    ?>
                    <div class="item">
                        <input type="hidden" name="id[]" value="<?php echo $item['product']['id']; ?>">
                        <span class="name">
                            <img src="<?php echo $item['product']['imgLink']; ?>" class="logo" alt="logo">
                            <?php echo $item['product']['name']; ?>
                        </span>
                        <input type="hidden" name="name[]" value="<?php echo $item['product']['name']; ?>">
                        <span class="price"><?php echo $item['product']['price'] . " $"; ?></span>
                        <input type="hidden" name="price[]" value="<?php echo $item['product']['price']; ?>">
                        <span class="align-right">
                            <input class="quantity" type="number" name="quantity[]" value="<?php echo $item['quantity']; ?>">
                            <a class="margin-side-5" href="index.php?ctrl=basket&action=delete&id=<?php echo $item['product']['id']; ?>"><i class="fas fa-times"></i></a>
                        </span>
                    </div>
                    <?php
                }
                ?>
                <div class="wrapper-50 margin-auto center">
                    <input type="submit" class="save-btn" name="save" value="Save">
                </div>
            </div>

            <div class="wrapper-90 no-padding margin-auto">
                <h2>Total</h2>
                <div class="total"><?php echo $totalBasket; ?></div>
            </div>

            <?php if (!empty($_SESSION['user']['basket'])) { ?>
            <div class="wrapper-50 margin-auto center">
                <input type="submit" class="submit-btn" name="pay" value="Save & Pay">
            </div>
            <?php } ?>
        </form>
        <?php
    } else {
        header("Location: ./index.php?ctrl=user&action=login");
    }
?>
