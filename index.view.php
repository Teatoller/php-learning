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
                <strong>Status:</strong>
                <!-- option 1 -->
                <!-- <?= ucfirst($task['completed'] ? 'complete' : 'incomplete'); ?> -->

                <!-- option 2 -->
                <!-- <?php
                        if ($task['completed']) {
                            echo '&#9989;';
                        } else {
                            echo '&#10062;';
                        }
                        ?> -->
                <!-- option 3 -->
                <?php if ($task['completed']) : ?>
                <span class="icon" >&#9989;</span>
                    <?php else: ?>
                <span class="icon" >&#10062;</span>
                <?php endif; ?>
            </li>
        </ul>
    </header>
</body>

</html>
