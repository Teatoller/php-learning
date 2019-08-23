<?php require('partials/head.php'); ?>

<h1>Submit Your Name</h1>

<form action="/names" method="POST">
    Name: <input type="text" name="name"><br>
    <button type="submit">Submit</button>
</form>
<h2>Output:</h2>
<?php foreach($users as $user): ?>
<ul><li><?= $user->name; ?></li></ul>
<?php endforeach; ?>

<hr />
<h1>My Tasks</h1>
<ul>
    <?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
        <strike><?php echo $task->description ?></strike>
        <?php else : ?>
        <?php echo $task->description ?>
        <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>

<?php require('partials/footer.php'); ?>
