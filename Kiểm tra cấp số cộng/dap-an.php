<?php
/*
Trong toán học, một cấp số cộng là một dãy số thoả mãn điều kiện: hai phần tử liên tiếp nhau sai khác nhau một hằng số. Chẳng hạn, dãy số 3, 5, 7, 9, 11,... là một cấp số cộng với các phân tử liên tiếp sai khác nhau hằng số 2.
Cho một mảng số nguyên. Hãy kiểm tra xem nó có tạo thành một cấp số cộng hay không?

Input Format
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu cách

Constraints
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu cách

Output Format
1 giá trị boolean (true hoặc false).
*/
/* BẮT ĐẦU ĐÁP ÁN */
function checkPlusLevel($s) {
    $array = explode(' ',$s);
    $checkPlus = (int)$array[1] - (int)$array[0];
    $isOk = true;
    for( $i = 1; $i < count($array); $i++ ){
        if( (int)$array[$i] - (int)$array[$i - 1] !== $checkPlus ){
            $isOk = false;
        }
    }
    return $isOk ? 1: 0;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( checkPlusLevel('1 4 7') );
echo '<hr>';
var_dump( checkPlusLevel('3 5 7 9 11') );