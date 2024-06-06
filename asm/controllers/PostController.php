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
            $thumbnail = $_FILES['image']['name'];
            
            //code logic upload file
            $from = $_FILES['image']['tmp_name']; //lấy file từ bộ nhớ tạm thời 
            $target_folder = PATH_ROOT.'uploads/'; //thư mục lưu file upload
            //$to: tên thư mục lưu + tên file
            $to = $target_folder . basename($_FILES['image']['name']);
            //dùng hàm move_uploaded_file để tải ảnh lên server
            move_uploaded_file($from,$to);

            $this->postModel->themPost($title,$content,$userId,$cateId,$thumbnail);
            header('location: index.php?act=list');
        } else { //nếu ng dùng chưa submit, trả về view createPost
            $users = $this->userModel->listUsers();
            $categories = $this->cateModel->listCate();
            
            require_once './views/createPost.php';
        }
    }

    public function chinhSua() {
        //kiểm tra xem có truyền giá trị id_post lên URL không và id_post > 0
        if(isset($_GET['id_post']) && $_GET['id_post'] > 0) { 
            //hiển thị dữ liệu cũ ra form edit
            $id = $_GET['id_post'];
            if (isset($_POST['sua'])) {
                //lấy dữ liệu từ form: $_POST['name'], thuộc tính name khai báo trong thẻ html trong form
                $title = $_POST['title'];
                $content = $_POST['content'];
                $userId = $_POST['user_id'];
                $cateId = $_POST['category_id'];
                $thumbnail = $_POST['thumbnail'];

                //gửi dữ liệu sang model để thực hiện câu truy vấn
                $this->postModel->suaPost($id,$title,$content,$userId,$cateId,$thumbnail);
                header('location: index.php?act=list');
            } else {
                $post = $this->postModel->chiTietPost($id); 
                $users = $this->userModel->listUsers();
                $categories = $this->cateModel->listCate();
                
                require_once './views/editPost.php';
            }
        }
    }

    public function xoa() {
        if (isset($_GET['id_post']) && $_GET['id_post'] > 0) { //kiểm tra id_post có hợp lệ hay không
            $id = $_GET['id_post']; //lấy id bài post cần xóa
            $this->postModel->xoaPost($id); //gọi hàm trong model để thực hiện truy vấn
            header('location: index.php?act=list');
        }
    }
}
?>
