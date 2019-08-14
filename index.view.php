<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <style>
        header {
            background-color: teal;
            padding: 2em;
        }
    </style>
</head>

<body>
    <header>
        <ul>

            <?php
            foreach ($person as $key => $value) {

                echo "<li>$key => $value</li>";
            }
            ?>
            <hr />
            <!-- alternative script -->
            
            <?php foreach ($person as $feature) : ?>

            <li><?= $feature; ?></li>

            <?php endforeach; ?>

        </ul>
    </header>
</body>

</html>
