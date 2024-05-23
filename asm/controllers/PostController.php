<?php
class PostController 
{
    public $postModel;

    public function __construct() 
    {
        $this->postModel = new Post();
    }

    public function hienThiDanhSach()
    {
        //B1: tạo ra 1 object từ class Post.php là $this->postModel
        //B2: dùng object để gọi hàm: $this->postModel->danhSachPost()
        $posts = $this->postModel->danhSachPost();

        require_once './views/listPost.php';
    }

    public function hienThiChiTiet()
    {

    }

    public function themMoi()
    {

    }
}
?>
