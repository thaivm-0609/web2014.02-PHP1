<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài post</title>
</head>
<body>
    <h1><?php echo $post['title'] ?></h1>
    <h1><?= $post['title'] ?></h1>
    <img src="<?= $post['thumbnail']?>" alt="">
    <p><?= $post['content'] ?></p>
</body>
</html>