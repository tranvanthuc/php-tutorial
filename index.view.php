<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arrays</title>
</head>
<body>
    <?php foreach($listStudents as $key => $value) : ?>
        <b><?= $key ?></b>: <?= $value['age'] ?> years old<br>
    <?php endforeach; ?>
</body>
</html>
