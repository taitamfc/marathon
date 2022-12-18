<?php
/*
Cho hai xâu kí tự, tìm số lượng ký tự chung giữa chúng.

Input
aabcc
adcaa

Ouput
3

Input Format
Dòng đầu tiên là 1 chuỗi ký tự Dòng thứ 2 là 1 chuỗi ký tự khác cần so sánh với chuỗi trên

Constraints
Dòng đầu tiên là 1 chuỗi ký tự Dòng thứ 2 là 1 chuỗi ký tự khác cần so sánh với chuỗi trên

Output Format
1 giá trị số nguyên
*/
 /* BẮT ĐẦU ĐÁP ÁN */
function solve($s1, $s2) {
    $s1_arr = str_split($s1);
    $s2_arr = str_split($s2);

    $count = 0;
    foreach( $s1_arr as $s ){
        $pos_2 = array_search($s,$s2_arr);
        if( $pos_2 !== false ){
            unset($s2_arr[$pos_2]);
            $count++;
        }
    }
    return $count;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( solve('aabcc','adcaa') );
echo '<hr>';
var_dump( solve('Abcdef1234','Uykhldg1') );