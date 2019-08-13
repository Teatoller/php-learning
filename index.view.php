<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <style>
        header {
            background-color: teal;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <ul>

            <?php
            foreach ($names as $name) {

                echo "<li>$name</li>";
            }
            ?>
            <hr />
            <!-- alternative script -->
            
            <?php foreach ($names as $name) : ?>

            <li><?= $name; ?></li>

            <?php endforeach; ?>

        </ul>
    </header>
</body>

</html>
