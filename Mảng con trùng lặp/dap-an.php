<?php
/*
Input Format
Dòng đầu tiên là 1 chuỗi các số nguyên của mảng parent, mỗi số nguyên sẽ cách nhau bởi dấu cách 
Dòng thứ 2 là 1 chuỗi các số nguyên của mảng child, mỗi số nguyên sẽ cách nhau bởi dấu cách


Output 
Số lần xuất hiện của mảng con trong mảng cha
 */

/* BẮT ĐẦU ĐÁP ÁN */
function solve($parentString, $childString) {
    $parent_arr = explode(' ',$parentString);
    $child_arr  = explode(' ',$childString);
    $check_all_ok = true;
    foreach( $child_arr as $number ){
        $is_number_exist = false;
        foreach( $parent_arr as $number_parent ){
            if( $number == $number_parent ){
                $is_number_exist = true;
            }
        }
        if( $is_number_exist == false ){
            $check_all_ok = false;
        }
    }
    return $check_all_ok ? 1 : 0;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( solve('1 4 5 2 1','1 2 3') );
echo '<hr>';
var_dump( solve('1 4 5 2 3','1 2 3') );