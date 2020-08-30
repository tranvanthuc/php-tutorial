<?php require("layout/header.view.php") ?>

<h3>Todos</h3>
<ul>
    <?php foreach ($todos as $todo) : ?>
        <li><?= $todo->name ?></li>
    <?php endforeach; ?>
</ul>

<h3>Add todo</h3>
<form action="/add-todo" method="post">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require("layout/footer.view.php") ?>