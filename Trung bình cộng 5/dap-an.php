<?php
/*
Input Format
mảng số nguyên

Output 
trung bình cộng và số lượng số nhỏ hơn số trung bình cộng
 */

/* BẮT ĐẦU ĐÁP ÁN */
function solve($arr) {
    if( count($arr) == 0 ){
        return [0,0];
    }
    
    $total = 0;
    foreach( $arr as $number ){
        $total += $number;
    }
    
    if( $total == 0 ){
        return [0,0];
    }

    $tbc = $total / count($arr);

    $count = 0;
    foreach( $arr as $number ){
        if($number < $tbc){
            $count++;
        }
    }

    return [$tbc,$count];
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( solve([1, 2, 3, 4, 5]) );
echo '<hr>';
var_dump( solve([0]) );