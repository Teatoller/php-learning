<?php require('partials/head.php'); ?>


<h1>All Users</h1>
<h1>Submit Your Name</h1>

<form action="/users" method="POST">
    Name: <input type="text" name="name"><br>
    <button type="submit">Submit</button>
</form>
<h2>Output:</h2>
<?php foreach ($users as $user) : ?>
<ul>
    <li><?= $user->name; ?></li>
</ul>
<?php endforeach; ?>

<?php require('partials/footer.php'); ?>
