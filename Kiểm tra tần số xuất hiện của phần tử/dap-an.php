<?php
/*
Input Format
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu cách

Constraints
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu cách

Output Format
1 giá trị Boolean
*/
/* BẮT ĐẦU ĐÁP ÁN */
function checkCountElement($s) {
    $inputArray = explode(' ',$s);
    $counts = [];
    foreach( $inputArray as $need_count ){
        $counts[$need_count] = 0;
        foreach( $inputArray as $number ){
            if( $need_count == $number ){
                $counts[$need_count]++;
            }
        }
    }

    $equal = true;
    $first_value = current($counts);

    foreach( $counts as $need_count => $count ){
        if( $first_value != $count ){
            $equal = false;
        }
    }

    return $equal ? 1 : 0;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( checkCountElement('1 2 2 1') );
echo '<hr>';
var_dump( checkCountElement('1 2 2 0 1 3 0 3') );