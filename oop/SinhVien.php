<?php
//khởi tạo class với cú pháp "class TenClass" 
class SinhVien {
    //trong class cần khai báo 2 phần: thuộc tính (property) + hành động (method)
    /* Tính ĐÓNG GÓI trong OOP: thể hiện thông qua access level:
        - public: class nào cũng có thể sử dụng được => SẼ SỬ DỤNG TOÀN BỘ LÀ PUBLIC
        - protected: chỉ có class đó và class con của nó sử dụng được
        - private: chỉ có bản thân class đó sử dụng được
     */

    /* Tính KẾ THỪA trong OOP: tạo ra một class mới, kế thừa lại từ một class đã có
        class TenClassCon extends TenClassCha {}

        class con sẽ kế thừa lại toàn bộ thuộc tính/hành động 
        của class cha (trừ những cái được khai báo là private)
     */

    /* Tính TRỪU TƯỢNG trong OOP */
    /* Tính ĐA HÌNH trong OOP */

    //khai báo thuộc tính (property): thông tin của class sinh viên
    public $ten = '';
    public $dateOfBirth = '';
    public $gioiTinh = '';
    public $maSinhVien = '';

    //khai báo hành động (method/function)
    //hàm __construct() sẽ được thực thi khi khởi tạo object từ một class
    public function __construct($maSinhVien, $ten, $gioiTinh, $dateOfBirth)
    {
        $this->ten = $ten;
        $this->maSinhVien = $maSinhVien;
        $this->gioiTinh = $gioiTinh;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function hienThiThongTin() {
        echo "Họ tên:" .$this->ten. "<br>";
        echo "Mã sinh viên:" .$this->maSinhVien. "<br>";
        echo "Giới tính:" .$this->gioiTinh. "<br>";
        echo "Ngày sinh:" .$this->dateOfBirth. "<br>";
    }

    public function diHoc() {

    }

    public function an() {

    }

    public function ngu() {

    }
}

class SinhVienIT extends SinhVien { //class SinhVienIT kế thừa lại class SinhVien
    public function hienThiTen() {
        echo $this->ten;
    }
}

//khởi tạo Object từ class SinhVien
// cú pháp khởi tạo Object $tenObject = new TenClass();
$phuong = new SinhVien('PH12345', 'Phương', 'Nam', '2004');
/*  cú pháp truy suất thuộc tính: $tenObject->tenProperty; 
    cú pháp gọi hàm: $tenObject->tenHam();
*/

// $phuong->maSinhVien;
// $phuong->hienThiThongTin();

$thaivm2 = new SinhVienIT('12345', 'Thaivm2', 'Nam', 'XXXX');
/* cú pháp cập nhật lại property: $tenObject->tenProperty = GiáTrịMới */
$thaivm2->maSinhVien = '98765'; //gán lại giá trị của thuộc tính maSinhVien 
$thaivm2->hienThiThongTin();
// $thaivm2->hienThiTen();

?>
