<?php 
//require file cấu hình/biến môi trường
require_once './commons/env.php';
require_once './commons/function.php';

//require controllers
require_once './controllers/PostController.php';

//require models
require_once './models/Post.php';

//Routing: điều hướng website
//VD URL: http://localhost/web2014.02/asm/index.php?act=list
$action = $_GET['act']; 

switch ($action) {
    case 'list':
        /* B1: khởi tạo 1 object từ class PostController
            B2: từ object vừa tạo, thực hiện gọi hàm */
        // $postController = new PostController();
        // $postController->hienThiDanhSach();
        (new PostController())->hienThiDanhSach();
        break;
    case 'create':
        echo 'Đây là trang tạo mới';
        break;
}
?>
