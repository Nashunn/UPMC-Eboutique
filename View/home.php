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
        <div class="item">
            <img src="./View/img/tree.png" class="logo" alt="logo">
            <div class="text">Name of the tree</div>
            <div class="price">70$</div>
            <a href="./index.php?ctrl=basket&action=add" class="no-deco"><div class="add-btn">Add to my basket</div></a>
        </div>
        <div class="item">
            <img src="./View/img/flower.png" class="logo" alt="logo">
            <div class="text">Name of the plant</div>
            <div class="price">10$</div>
            <a href="./index.php?ctrl=basket&action=add" class="no-deco"><div class="add-btn">Add to my basket</div></a>
        </div>
        <div class="item">
            <img src="./View/img/seeds.png" class="logo" alt="logo">
            <div class="text">Name of the seeds</div>
            <div class="price">2$</div>
            <a href="./index.php?ctrl=basket&action=add" class="no-deco"><div class="add-btn">Add to my basket</div></a>
        </div>
        <div class="item">
            <img src="./View/img/flower.png" class="logo" alt="logo">
            <div class="text">Name of the plant</div>
            <div class="price">13$</div>
            <a href="./index.php?ctrl=basket&action=add" class="no-deco"><div class="add-btn">Add to my basket</div></a>
        </div>
        <div class="item">
            <img src="./View/img/bouquet.png" class="logo" alt="logo">
            <div class="text">Name of the bouquet</div>
            <div class="price">15$</div>
            <a href="./index.php?ctrl=basket&action=add" class="no-deco"><div class="add-btn">Add to my basket</div></a>
        </div>
        <div class="item">
            <img src="./View/img/fruits.png" class="logo" alt="logo">
            <div class="text">Name of the fruit</div>
            <div class="price">5$</div>
            <a href="./index.php?ctrl=basket&action=add" class="no-deco"><div class="add-btn">Add to my basket</div></a>
        </div>
        <a href="./index.php?ctrl=product&action=all" class="no-deco" title="More items">
            <div class="consultAll">
            <img src="./View/img/suspend.png" class="logo" alt="logo">
            <div class="text">More</div>
            </div>
        </a>
    </div>
</div>