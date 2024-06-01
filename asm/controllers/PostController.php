<?php
class PostController 
{
    public $postModel;
    public $userModel; //truy vấn dữ liệu từ bảng user
    public $cateModel; 

    public function __construct() 
    {
        //phải require model ở trong index.php
        $this->postModel = new Post();
        $this->userModel = new User();
        $this->cateModel = new Category();
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
        if (isset($_POST['them'])) { //kiểm tra xem người dùng đã bấm nút submit hay chưa?
            $title = $_POST['title'];
            $content = $_POST['content'];
            $userId = $_POST['user_id'];
            $cateId = $_POST['category_id'];
            $thumbnail = $_POST['thumbnail'];

            $this->postModel->themPost($title,$content,$userId,$cateId,$thumbnail);
            header('location: index.php?act=list');
        } else { //nếu ng dùng chưa submit, trả về view createPost
            $users = $this->userModel->listUsers();
            $categories = $this->cateModel->listCate();
            
            require_once './views/createPost.php';
        }
    }
}
?>
