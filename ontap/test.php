<?php 
    require 'index.php';

    // giaiPTBac2(1,2,4);
    function chepPhat($x) {
        for ($i=1;$i<$x;$i++) {
            echo 'Em xin hứa sẽ làm bài đầy đủ <br>';
        }
    }

    // chepPhat(5);

    //in chuỗi fibonacci
    function fibonacci($n) {
        //khởi tạo giá trị của 2 phần tử đầu tiên
        $x = 1;
        $y = 1;

        for ($i=0;$i<$n;$i++) {
            $z = $x+$y; //tính giá trị tiếp theo = tổng 2 số liền trước
            echo $z.';';
            $x = $y; //gán lại giá trị của x = giá trị của y
            $y = $z; //gán lại giá trị của y = giá trị của z
        }
    }

    //bảng cửu chương
    function bangCuuChuong() {
        for ($i=1;$i<=9;$i++) {
            echo "Đây là bảng cửu chương $i <br>";
            for ($j=1;$j<=10;$j++) {
                $tich=$i*$j;
                echo "$i x $j = $tich;<br>";
            }
        }
    }
    bangCuuChuong();
?>
