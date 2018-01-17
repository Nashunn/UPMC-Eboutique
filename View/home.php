<?php if(isset($_SESSION['user']) && isset($admin) && $admin==true) { ?>
<!-- Admin Management -->
<div id="admin-box">
    <h2>Administration Panel</h2>
    <a href="./index.php?ctrl=admin&action=panel" class="submit-btn no-deco">Consult panel</a>
</div>
<!-- End of the Admin Management -->
<?php } ?>

<!-- Monthly box -->
<div id="monthly-box">
    <h2>Monthly Box</h2>
    <h3 class="no-margin">of <?php echo date('F'); ?></h3>
    <div class="price">50$</div>

    <div class="content">
        <div class="box-item">
            <img src="./View/img/seeds.png" class="item-logo" alt="logo">
            <div class="item-text">5 bag of seeds</div>
        </div>
        <div class="box-item">
            <img src="./View/img/flower.png" class="item-logo" alt="logo">
            <div class="item-text">3 flowers</div>
        </div>
        <div class="box-item">
            <img src="./View/img/bouquet.png" class="item-logo" alt="logo">
            <div class="item-text">1 bouquet</div>
        </div>
        <div class="box-item">
            <img src="./View/img/fruits.png" class="item-logo" alt="logo">
            <div class="item-text">1 basket of fruits</div>
        </div>
    </div>

    <div class="secret">+ 1 secret item !</div>
</div>
<form class="center" action="./basket?ctrl=basket&action=add&id=#" method="POST">
    <input type="submit" class="submit-btn margin-auto" value="I want a box !">
</form>
<!-- End Monthly Box -->

<div id="newItems">
    <h2 class="padding-left-10px">New & Fresh</h2>
    <div class="content">
        <?php
        $newItems = $productManager->getNewItems();

        if(!empty($newItems)) {
            foreach($newItems as $item) {
                ?>
                <div class="item">
                    <img src="<?php echo $item['imgLink']; ?>" class="logo" alt="logo">
                    <div class="text"><?php echo $item['name']; ?></div>
                    <div class="price"><?php echo $item['price']; ?>$</div>
                    <a href="./index.php?ctrl=basket&action=add" class="no-deco"><div class="add-btn">Add to my basket</div></a>
                </div>
                <?php
            }
            ?>
            <a href="./index.php?ctrl=product&action=all" class="no-deco all-product" title="More items">
                <div class="consultAll">
                    <img src="./View/img/suspend.png" class="logo" alt="logo">
                    <div class="text">More</div>
                </div>
            </a>
            <?php
        }
        else {
            ?><p>No products were found</p><?php
        }
        ?>
    </div>
</div>