<?php
/*
Input Format
1 chuỗi ký tự

Output 
1 chuỗi ký tự
 */

/* BẮT ĐẦU ĐÁP ÁN */
function insertSpace($s) {
    $upperString = 'QWERTYUIOPASDFGHJKLZXCVBNM';
    $s_arr = str_split($s);
    foreach( $s_arr as $val ){
        if( $find = strpos($upperString,$val) !== false ){
            $s = str_replace($val,' '.strtolower($val),$s);
        }
    }
    $s = trim($s);
    return $s;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( insertSpace('Hello') );
echo '<hr>';
var_dump( insertSpace('DaNang') );