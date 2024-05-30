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

    public function thongTinChiTiet()
    {
        //kiểm tra xem có truyền giá trị id_post lên URL không và id_post > 0
        if(isset($_GET['id_post']) && $_GET['id_post'] > 0) { 

            $id = $_GET['id_post'];

            $post = $this->postModel->chiTietPost($id); 
            
            require_once './views/detailPost.php';
        }
    }

    public function taoMoi()
    {
        if (isset($_POST['them'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $userId = $_POST['user_id'];
            $cateId = $_POST['category_id'];
            $thumbnail = $_POST['thumbnail'];

            $this->postModel->themPost($title,$content,$userId,$cateId,$thumbnail);
            header('location: index.php?act=list');
        } else {
            require_once './views/createPost.php';
        }
    }
}
?>
