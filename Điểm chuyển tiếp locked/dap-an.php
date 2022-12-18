<?php
/*
Cho một dãy số chỉ gồm 0 và 1. Tìm điểm chuyển tiếp giữa 2 số 0 và 1

Example:

Input 1:

5
0 0 0 1 1

Output 2:
3
    Giải thích: Vị trí số 3 là điểm chuyển tiếp vì là vị trí bắt đầu của dãy số 1

Input Format

Input
    Dòng đầu tiên gồm 1 số nguyên n duy nhất là số phần từ của dãy số
    Dòng tiếp theo gồm n phần của dãy ngăn cách nhau bằng dấu cách
*/

function solve($arr) {
    $arr = explode(' ',$arr);
    $index = -1;
    foreach( $arr as $key => $number ){
        if( $number == 1 ){
            $index = $key;
            break;
        }
    }
    return $index;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( solve('0 0 0 1 1') );
echo '<hr>';
var_dump( solve('0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 1') );
