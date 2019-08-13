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
        <h1>
            <?= "Hello, " . htmlspecialchars($_GET['name']);
            ?>
        </h1>
    </header>
</body>

</html>
