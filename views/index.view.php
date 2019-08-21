<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <nav>
        <li><a href="views/index.view.php">Home</a></li>
        <li><a href="views/about.view.php">About Us</a></li>
        <li><a href="views/contact.view.php">Contact Us</a></li>

    </nav>
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

</body>

</html>
