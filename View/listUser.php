<div>
    <h2 class="center">List of users</h2>
    <?php
    if(isset($usersList) && isset($usersNb) && $usersNb>0) {
        ?>
        <table class="">
            <tr>
                <th>Email</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Admin</th>
            </tr>
            <?php
            foreach($usersList as $user) {
                ?>
                <tr>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td><?php echo $user['firstName'] ?></td>
                    <td><?php echo $user['lastName'] ?></td>
                    <td><?php echo $user['admin'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
    else {
        ?>
        <p class="center">No users in database</p>
        <?php
    }
    ?>
</div>