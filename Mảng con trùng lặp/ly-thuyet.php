<?php
/*
Tìm số lần xuất hiện mảng con trong mảng cha
Điều kiện child là con của parent (các phần tử trong mảng child xuất hiện ít nhất 1 lần trong mảng parent)
 
Input:
Dòng đầu tiên là 1 chuỗi các số nguyên của mảng parent, mỗi số nguyên sẽ cách nhau bởi dấu “,”
Dòng thứ 2 là 1 chuỗi các số nguyên của mảng child, mỗi số nguyên sẽ cách nhau bởi dấu “,”
 
Output: Số lần xuất hiện của mảng con trong mảng cha
Ví dụ: 
- parent =[1,4,5,2,1],child=[1,2,3] =>return 0 // không xuất hiện
- parent =[1,4,5,2,3] child=[1,2,3] => return 1; // xuất hiện 1 lần
*/

$parent = [1,4,5,2,1];
$child  = [1,2,3];

$check_all_ok = true;
foreach( $child as $number ){
    $is_number_exist = false;
    foreach( $parent as $number_parent ){
        if( $number == $number_parent ){
            $is_number_exist = true;
        }
    }
    if( $is_number_exist == false ){
        $check_all_ok = false;
    }
}

var_dump($check_all_ok);

