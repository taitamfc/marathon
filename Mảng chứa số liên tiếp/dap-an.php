<?php
/*
Input Format
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu cách

Output 
1 mảng số nguyên
 */

/* BẮT ĐẦU ĐÁP ÁN */
function findIncreaseArray($s) {
    $arr = explode(' ',$s);
    $max = current($arr);
    $min = current($arr);
    foreach($arr as $num){
        if( $num > $max ){
            $max = $num;
        }
        if( $num < $min ){
            $min = $num;
        }
    }

    $missingNumbers = [];
    for( $i = $min; $i <= $max; $i++ ){
        if( !in_array( $i, $arr ) ){
            $missingNumbers[] = $i;
        }
    }
    
    return $missingNumbers;

}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( findIncreaseArray('6 2 3 8') );
echo '<hr>';
var_dump( findIncreaseArray('2 3 8') );