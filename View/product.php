<div id="product-box">
<?php
if(isset($listProducts) && !empty($listProducts)) {
    foreach($listProducts as $item) {
        ?>
        <div class="item">
            <img src="<?php echo $item['imgLink']; ?>" class="logo" alt="logo">
            <div class="text"><?php echo $item['name']; ?></div>
            <div class="price"><?php echo $item['price']; ?> $</div>
            <a href="./index.php?ctrl=basket&action=add" class="no-deco"><div class="add-btn">Add to my basket</div></a>
        </div>
        <?php
    }
}
else {
    ?><p>No products were found in this category</p><?php
}
?>
</div>
