<?php
/*
Hãy liệt kê các giá trị trong mảng 1 chiều các số nguyên có chữ số đầu tiên là chữ số lẻ Nếu không có giá trị nào thì trả về -1
Input Format
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu cách

Constraints
1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu cách

Output Format
1 mảng số nguyên gồm các phần tử có chữ số đầu tiên là chữ số lẻ
*/

 /* BẮT ĐẦU ĐÁP ÁN */
function getOddHeadNumbers($s) {
    $arr = explode(' ',$s);
    $newArr = [];
    foreach( $arr as $number ){
        $firstChar = substr($number,0,1);
        if( $firstChar % 2 != 0 ){
            $newArr[] = $number;
        }
    }
    if( count($newArr) ){
        return $newArr;
    }
    return -1;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( getOddHeadNumbers('13 4456 723424 234234 534234') );
echo '<hr>';
var_dump( getOddHeadNumbers('22343534 42312312 6235345') );