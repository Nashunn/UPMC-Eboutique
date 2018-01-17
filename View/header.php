<?php
$pdoBuilder = new Connection();
$db = $pdoBuilder->getDb();

require_once('./model/UserManager.php');
require_once('./model/ProductManager.php');
$userManager = new UserManager($db);
$productManager = new ProductManager($db);
?>

<header>
    <div id="info-bar">
        <p>The first platform of ECO-MMERCE</p>
    </div>

    <div id="banner-bloc">
        <a href="./" class="no-deco center">
            <img class="banner" src="./View/img/banniere.png" title="Homepage" alt="website banner">
        </a>
        <h1>Ecosphere</h1>
    </div>

    <div id="account_bar">
        <?php if(isset($_SESSION['user'])) { ?>
        <div class="connection center">
            <a href="./index.php?ctrl=user&action=logout" class="no-deco" title="Logout account">
                <i class="fas fa-user"></i>
                <div class="text">Logout</div>
            </a>
        </div>
        <div class="basket center">
            <a href="./index.php?ctrl=basket&action=consult" class="no-deco" title="Consult your basket">
                <?php
                    $nbItems = -1;
                    if(isset($_SESSION['user']['basket'])) {
                        $nbItems = count($_SESSION['user']['basket']);
                    }

                    if($nbItems>0) {
                        ?><div class="nb-items"><?php echo $nbItems; ?></div><?php
                    }
                ?>
                <i class="fas fa-shopping-bag"></i>
                <div class="text">My basket</div>
            </a>
        </div>
        <?php } else { ?>
        <div class="connection center">
            <a href="./index.php?ctrl=user&action=login" class="no-deco" title="Login or create account">
                <i class="fas fa-user"></i>
                <div class="text">Login</div>
            </a>
        </div>
        <?php } ?>
    </div>

    <ul id="menu_bar">
        <a href="./index.php?ctrl=product&action=trees" class="no-deco"><li>Trees</li></a>
        <a href="./index.php?ctrl=product&action=plants" class="no-deco"><li>Plants</li></a>
        <a href="./index.php?ctrl=product&action=bouquets" class="no-deco"><li>Bouquets</li></a>
        <a href="./index.php?ctrl=product&action=seeds" class="no-deco"><li>Seeds</li></a>
        <a href="./index.php?ctrl=product&action=fruits" class="no-deco"><li>Fruits</li></a>
    </ul>
</header>