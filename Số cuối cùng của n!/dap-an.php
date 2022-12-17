<?php
/*
Đề:
Tìm chữ số khác không cuối cùng của n!(giai thừa)

Input Format
1 số nguyên

Output 
1 số nguyên
 */

/* BẮT ĐẦU ĐÁP ÁN */
function findLastNumber($a) {
    $tich = 1;
    for( $i = 1; $i <= $a; $i++ ){
        $tich *= $i;
    }
    $arr = str_split($tich);

    $numbers = [];
    foreach( $arr as $num ){
        if( $num != 0 ){
            $numbers[$num] = $num;
        }
    }
    return end($numbers);

}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( findLastNumber(5) );
echo '<hr>';
var_dump( findLastNumber(12) );