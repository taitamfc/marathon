<?php
/*
Input Format
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu khoảng trắng

Output 
Chỉ số của số lớn thứ 2
 */

 /* BẮT ĐẦU ĐÁP ÁN */
function findIndexSecondHighest($s) {
    $arr = explode(' ',$s);
    if(empty($arr)) {
        return;
    }
    $max = 0;
    $secondMax = 0;
    $findIndex = -1;
    
    foreach($arr as $index => $number) {
        if($number > $max) {
            $secondMax = $max;
            $max = $number;
            $findIndex = $index;
        }
        if($number > $secondMax && $number < $max) {
            $secondMax = $number;
            $findIndex = $index;
        }
    }
    return $findIndex;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( findIndexSecondHighest('8 3 6 1 5 4') );
echo '<hr>';
var_dump( findIndexSecondHighest('8 3 6 1 5 4 7') );