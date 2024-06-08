<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa post</title>
</head>
<body>
    <!-- Để upload file: 
    * B1: Thêm enctype="multipart/form-data" vào thẻ form
    * B2: Đổi type="file" trong thẻ input -->
    <form 
        action="index.php?act=edit&id_post=<?=$post['id']?>" 
        method="POST"
        enctype="multipart/form-data"
    >
        <div>
            <label for="">Title</label>
            <input type="text" name="title" value="<?=$post['title']?>">
        </div>
        <div>
            <label for="">Content</label>
            <input type="text" name="content" value="<?=$post['content']?>">
        </div>
        <div>
            <label for="">Author</label>
            <select name="user_id" id="">
                <!-- lấy danh sách user từ bảng users
                để hiển thị ra option -->
                <?php foreach ($users as $u) { ?>
                    <!-- <option value="(giá trị lấy để lưu vào db)">Label (người dùng nhìn thấy)</option> -->
                    <!-- Kiểm tra select option đang được chọn, user.id = post.user_id -->
                    <?php if ($u['id'] == $post['user_id']) { ?>
                        <option selected value="<?=$u['id']?>"><?=$u['name']?></option>
                    <?php } else { ?>
                        <option value="<?= $u['id'] ?>"><?= $u['name'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="">Category</label>
            <select name="category_id" id="">
                <!-- lấy danh sách danh mục từ bảng categories
                để hiển thị ra option -->
                <?php foreach($categories as $c) { ?>
                    <?php if ($c['id'] == $post['category_id']) { ?>
                        <option selected value="<?= $c['id'] ?>"><?=$c['name'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $c['id'] ?>"><?=$c['name'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="">Thumbnail</label>
            <input type="file" name="thumbnail" value="<?=$post['thumbnail']?>">
            <img style="height: 100px;" src="./uploads/<?=$post['thumbnail']?>" alt="">
        </div>
        <input type="submit" value="Sửa" name="sua">
    </form>
</body>
</html>