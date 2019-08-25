<?php require('partials/head.php'); ?>

<h1>Submit Your Tasks</h1>
<form action="/tasks" method="POST">
    Description: <input type="text" name="description" placeholder="Enter description"> <br>
    Completed: <input type="int" name="completed" placeholder="0"> <br>
    <pre> Yes: 1, No: 0</pre>
    <button type="submit">Submit</button>
</form>

<h1>My Tasks</h1>

<h2>Output:</h2>
<?php foreach ($tasks as $task) : ?>
<ul>
    <li>
        <?php if ($task->completed) : ?>
        <strike><?php echo $task->description ?></strike>
        <?php else : ?>
        <?php echo $task->description ?>
        <?php endif; ?>
    </li>
</ul>
<?php endforeach; ?>

<?php require('partials/footer.php'); ?>
