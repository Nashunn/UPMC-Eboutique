<header>
    <a href="./index.php" class="no-deco"><img src="./View/img/bonsai.png" class="logo" alt="Logo du site" title="Un peu de déco">
        <h1>EcoSphere</h1></a>
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