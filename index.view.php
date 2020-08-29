<!DOCTYPE html>
<html lang="en">
<head>
    <title>Boolean</title>
</head>
<body>
    <?php foreach($tasks as $task) : ?>
        <div>
            <b>Tiêu đề:</b> <?= $task["title"] ?><br>
            <b>Hạn nộp:</b> <?= $task["due"] ?><br>
            <b>Trạng thái:</b> 
                <?php if($task["completed"]) : ?>
                    <span>Hoàn thành</span>
                <?php else : ?>
                    <span>Chưa</span>
                <?php endif ?>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>
