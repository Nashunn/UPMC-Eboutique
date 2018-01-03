<header>
    <a href="./index.php" class="no-deco"><img src="./View/img/bonsai.png" class="logo" alt="Logo du site" title="Un peu de déco">
    <h1>An MVC website</h1></a>
    <div id="account_bar">
        <?php
            if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            ?>
                Welcome <i><?php echo $_SESSION['user']?></i> : <a href="./index.php?ctrl=user&action=logout">Logout</a>
            <?php
            }
            else {
            ?>
                <a href="./index.php?ctrl=user&action=login">Login</a>
                or <a href="./index.php?ctrl=user&action=create">Create</a> an account
            <?php
            }
        ?>
    </div>
</header>

<section id="main-section">
    <?php
        if(isset($page)) {
            if($page == 'home')
                require("./View/home.php");
            else
                require("./View/".$page.".php");
        }

        if(isset($_SESSION['user']) && !empty($_SESSION['user']) && $page == 'home') {
            ?>
            <div class="block tiny-block">
                <h2>User Management Panel</h2>
                <a href="./index.php?ctrl=user&action=listUser" title="Consult the panel"><button class="submit-btn">Consult</button></a>
            </div>
            <?php
        }
    ?>
</section>

<footer>
    <hr>
    <p>BOULLET Nicolas - Licence professionnelle Projet Web at UPMC - 2017/2018</p>
</footer>