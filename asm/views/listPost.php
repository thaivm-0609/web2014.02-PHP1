<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài post</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Thumbnail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $p) { ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['title'] ?></td>
                    <td><?= $p['content'] ?></td>
                    <td><?= $p['user_id'] ?></td>
                    <td><img src="<?=$p['thumbnail']?>" alt=""></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>