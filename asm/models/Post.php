<?php
class Post 
{
    //tạo kết nối với CSDL
    public $connection;
    public function __construct()
    {   
        $this->connection = connect();
    }

    //lấy toàn bộ bản ghi trong bảng post
    public function danhSachPost() {
        //B1: Viết câu truy vấn 
        $sql = "SELECT * FROM posts";
        //B2: Thực thi câu truy vấn: 
        $stmt = $this->connection->prepare($sql); //B2.1: prepare
        $stmt->execute(); //B2.2: execute: thực thi câu truy vấn

        //lấy dữ liệu trả về cho controller, 
        //lấy danh sách nên sử dụng hàm fetchAll()
        return $stmt->fetchAll(); 
    }

    public function chiTietPost($id) {
        $sql = "SELECT * FROM posts WHERE id =".$id;
        
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        //lấy 1 bài post trả về nên sử dụng hàm fetch()
        return $stmt->fetch();
    }
}
?>
