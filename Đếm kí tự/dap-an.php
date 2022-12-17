<?php
/*
Input: 1 chuỗi ký tự
Output: Số ký tự khác nhau
*/

/* BẮT ĐẦU ĐÁP ÁN */
function countDiffChar($s) {
    $string_arr = str_split($s);
    $diffChars = [];
    foreach( $string_arr as $string ){
        $diffChars[$string] = $string;
    }
    return count($diffChars);
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( countDiffChar('cabca') );

