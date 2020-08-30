<!DOCTYPE html>
<html lang="en">

<head>
    <title>Todos List</title>
</head>

<body>
    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li><?= $todo->name ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>