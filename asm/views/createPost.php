<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới post</title>
</head>
<body>
    <form action="index.php?act=create" method="POST">
        <div>
            <label for="">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">Content</label>
            <input type="text" name="content">
        </div>
        <div>
            <label for="">Author</label>
            <input type="text" name="user_id">
        </div>
        <div>
            <label for="">Category</label>
            <input type="text" name="category_id">
        </div>
        <div>
            <label for="">Thumbnail</label>
            <input type="text" name="thumbnail">
        </div>
        <input type="submit" value="Thêm" name="them">
    </form>
</body>
</html>