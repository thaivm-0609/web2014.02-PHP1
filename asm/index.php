<?php 

$action = $_GET['act'];

switch ($action) {
    case 'list':  
        echo 'Đây là trang danh sách';
        break;
    case 'create':
        echo 'Đây là trang tạo mới';
        break;
}
?>
