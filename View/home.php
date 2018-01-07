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
<form class="center" action="./bag.php" method="POST">
    <input type="submit" class="submit-btn margin-auto" value="I want a box !">
</form>