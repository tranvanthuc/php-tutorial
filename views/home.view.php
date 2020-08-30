<!DOCTYPE html>
<html lang="en">

<head>
    <title>Todos list</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <h3>Todos</h3>
    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li><?= $todo->name ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>