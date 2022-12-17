<?php
/*
Input Format
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu khoảng trắng

Output 
Chỉ số của số lớn thứ 2
 */

 /* BẮT ĐẦU ĐÁP ÁN */
function findIndexSecondHighest($s) {
    $numbers = explode(' ',$s);

    if( !count($numbers) ){
        return -1;
    }

    $indexFirst = 0;
    $maxFirst = current($numbers);
    foreach( $numbers as $index => $number ){
        if( $number > $maxFirst ){
            $maxFirst = $number;
            $indexFirst = $index;
        }
    }
    unset( $numbers[$indexFirst] );

    $maxSecond = current($numbers);
    $indexSecond = 0;
    foreach( $numbers as $index => $number ){
        if( $number > $maxSecond ){
            $maxSecond = $number;
            $indexSecond = $index;
        }
    }

    return $indexSecond;

}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( findIndexSecondHighest('8 3 6 1 5 4') );
echo '<hr>';
var_dump( findIndexSecondHighest('8 3 6 1 5 4 7') );