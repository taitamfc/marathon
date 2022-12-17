<?php
/*
    Cho mảng 2 chiều, tìm số nguyên tố

    Input
    [1,2,8,43],
    [9,4,11,7],
    [11,6,4,0],
    [1,2,6,51] 

    thì output nhận được là:  [2,7,11,43]
*/

$arr_numbers = [ 
    [1,2,8,43],
    [9,4,11,7],
    [11,6,4,0],
    [1,2,6,51] 
];

$mang_so_nt = [];
foreach( $arr_numbers as $numbers ){
    foreach( $numbers as $number ){
        //số tự nhiên >1
        if( $number > 1 ){
            $is_snt = true;
            //duyệt từ 2 đến dưới nó, nếu có chia hết tức là ko phải snt
            for( $i = 2; $i < $number; $i++ ){
                if( $number % $i == 0 ){
                    $is_snt = false;
                }
            }

            //neu $is_snt ko thay doi gia tri
            if($is_snt == true){
                $mang_so_nt[$number] = $number;
            }
        }
        
    }
}

sort($mang_so_nt);

echo '<pre>';
print_r($mang_so_nt);
die();
  