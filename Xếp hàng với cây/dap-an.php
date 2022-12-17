<?php
/*
Input Format
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu khoảng trắng

Output 
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu khoảng trắng
 */

 /* BẮT ĐẦU ĐÁP ÁN */
function solve($s) {
    $array = explode(' ',$s);
    for ($i = 0; $i < count($array) - 1; $i++) {
        if( $array[$i] == - 1){
            continue;
        }
        $min = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if( $array[$j] == - 1){
                continue;
            }
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $t = $array[$min];
        $array[$min] = $array[$i];
        $array[$i] = $t;
    }
    return implode(' ',$array);
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( solve('-1 150 190 170 -1 -1 160 180') );
echo '<hr>';
var_dump( solve('-1 150 190 170 -1 -1 160 -1') );