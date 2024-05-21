<?php
/*
4 tính chất trong lập trình hướng đối tượng:
- Tính kế thừa: 
    + Class con kế thừa lại những 
    property/method (được khai báo phạm vi truy cập public/protected) từ class cha
- Tính đóng gói: quản lý quyền truy cập thông tin (access level):
    + public: ai cũng có thể truy cập được thông tin đó
    + protected: có class con của nó và chính class đó có quyền truy cập
    + private: chỉ bản thân class đó được quyền truy cập
- Tính đa hình
- Tình trừu tượng
*/

class ConNguoi {
    public function an() {}
    public function ngu() {}
    public function tho() {}
}

class GiangVien extends ConNguoi { //khởi tạo class giảng viên
    //property: thuộc tính
    public $maGV;
    public $hoten;
    public $gioitinh;
    public $namsinh;

    //method: phương thức (hành động)
    //hàm __construct sẽ được thực thi đầu tiên khi khởi tạo object từ class
    public function __construct($maGV,$hoten,$gioitinh,$namsinh) 
    {
        //$this->tenProperty = $params;
        $this->maGV = $maGV;
        $this->hoten = $hoten;
        $this->gioitinh = $gioitinh;
        $this->namsinh = $namsinh;
    }

    public function info() {
        echo "Mã GV: " .$this->maGV ."<br>";
        echo "Họ tên: " .$this->hoten ."<br>";
        echo "Giới tính: " .$this->gioitinh ."<br>";
        echo "Năm sinh: " .$this->namsinh ."<br>";
    }
    public function diDay() {
        echo 'đi dạy';
    }
    public function diemDanh() {
        echo 'điểm danh';
    }
    public function coiThi() {
        echo 'coi thi';
    }
}

//class GiangVienIT kế thừa lại class GiangVien
//class TenClassCon extends TenClassCha
class GiangVienIT extends GiangVien { 

}

//khởi tạo object từ một class
// $tenObject = new TenClass();

$thaivm2 = new GiangVienIT('thaivm2','vuongthai','nam','xxxx');

//cú pháp truy cập/thay đổi property: $tenObject->tenProperty
// $thaivm2->maGV = 'thaivm2';
//cú pháp gọi hàm: $tenObject->tenHam();
$thaivm2->info();
?>
