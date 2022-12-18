<?php
/*
Input Format
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu cách

Constraints
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu cách

Output Format
1 mảng số nguyên
*/
 /* BẮT ĐẦU ĐÁP ÁN */
function buildArray($s) {
    $array = explode(' ',$s);
    $numbers = [];
    $total = 0;
    foreach( $array as $num ){
        $total += $num;
        $numbers[] = $total;
    }
    return $numbers;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( buildArray('1 2 3') );
echo '<hr>';
var_dump( buildArray('1 2 3 4 0') );