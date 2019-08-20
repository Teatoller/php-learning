<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">

</head>

<body>
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
