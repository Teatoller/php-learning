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
        <h1>Task Assignment</h1>
        <ul>
            <li>
                <strong>Name:</strong> <?= ucfirst($task[('title')]); ?>;
            </li>
            <li>
                <strong>Due Date:</strong> <?= ucfirst($task['due']); ?>;
            </li>
            <li>
                <strong>Accountable:</strong> <?= ucfirst($task['assigned_to']); ?>;
            </li>
            <li>
                <strong>Status:</strong> <?= ucfirst($task['completed'] ? 'complete' : 'incomplete'); ?>
            </li>
        </ul>
    </header>
</body>

</html>
