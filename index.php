<?php 
    //đây là phần chú thích
    # khai báo biến
    $a = 10;
    $b = 5;
    /*
    
    */
    $tong = $a + $b;
    $hieu = $a - $b;
    $tich = $a * $b;
    $thuong = $a / $b;
    $chiaLayDu = $a%$b;
    $mang = [1,2,3];
    $chuoi = "web2014.02";

    // var_dump($chuoi); //in giá trị của biến $chuoi
    // die;
    // echo $tong .'<br>';  //in giá trị của biến $tong
    // echo $hieu .'<br>';
    // echo $tich .'<br>';
    // echo $thuong .'<br>';
    // echo $chiaLayDu;

    // $x = 2;
    // $y = '2';

    // var_dump($x == $y); 

    // if ($a%2 == 0) { //kiểm tra biến $a chia lấy dư cho 2 mà bằng 0 thì là số chẵn
    //     echo "Số chẵn";
    // } else { // ngược lại thì là số lẻ;
    //     echo "Số lẻ";
    // }

    //Giải phương trình bậc 2: a*x*x + b*x + c = 0;
    $a = 1;
    $b = 6;
    $c = 8;

    if ($a==0) { //kiểm tra giá trị của a có bằng 0 hay không
        $x = -$c/$b;
        echo "Nghiệm x =".$x;
    } else {
        $delta = $b*$b - 4*$a*$c; //tính delta = b^2-4ac;
        if ($delta < 0) {
            echo "Phương trình vô nghiệm";
        } else if ($delta == 0) {
            $x = -$b/(2*$a);
            echo "Phương trình có nghiệm kép x=".$x; 
        } else {
            $x1 = (-$b+sqrt($delta))/(2*$a);
            $x2 = (-$b-sqrt($delta))/(2*$a);

            echo "Phương trình có 2 nghiệm phân biệt x1=".$x1."và x2=".$x2;
        }
    }
?>
