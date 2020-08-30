<?php require("layout/header.view.php") ?>

<h3>Todos</h3>
<ul>
    <?php foreach ($todos as $todo) : ?>
        <li><?= $todo->name ?></li>
    <?php endforeach; ?>
</ul>

<?php require("layout/footer.view.php") ?>