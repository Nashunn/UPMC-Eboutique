<div class="wrapper-50 margin-auto center">
    <h2>Add a product</h2>
    <form class="form" action="index.php?ctrl=product&action=create" method="POST">
        <input type="text" name="name" placeholder="Name" required/><br>
        <input type="number" name="price" placeholder="Price" step=".01" required/><br>
        <select name="type">
            <option value="tree">Tree</option>
            <option value="plant">Plant</option>
            <option value="bouquet">Bouquet</option>
            <option value="seed">Seed</option>
            <option value="fruit">Fruit</option>
        </select>
        <p>
            <input type="submit" class="submit-btn" value="Add">
        </p>
        <p><?php if(isset($error)) echo $error; ?></p>
    </form>
</div>

<?php include_once "listUser.php" ?>