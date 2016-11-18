
<?php require('partiales/header.php'); ?>

<h3>Users</h3>
<ul>

    <?php foreach ($users as $user) :?>
        <li>
            <?= $user->name;?> | <?= $user->age;?>
        </li>
    <?php endforeach;?>
</ul>

<h3>Submit your name</h3>

<form method="POST" action="/users" >
    <input name="name" />
    <button type="submit">Submit</button>
</form>


<?php require('partiales/footer.php'); ?>