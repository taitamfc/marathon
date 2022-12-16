<?php
/*
Bài 1:
Level: Dễ
Yêu cầu:
Cho một mảng số nguyên Hãy kiểm tra xem tần số xuất hiện của tất cả các số nguyên trong mảng có bằng nhau hay không
 
Input: 1 chuỗi chứa dãy số nguyên, mỗi số cách nhau bởi 1 dấu “,”
 
Output: 1 giá trị Boolean
 
Ví dụ:
-         Với inputArray = [1, 2, 2, 1], thì kết quả checkEqualFrequency(inputArray) = true
Số 1 và số 2 đều có tần số xuất hiện là 2
-         Với inputArray = [1, 2, 2, 3, 1, 3, 1, 3], thì kết quả checkEqualFrequency(inputArray) = false.
Số 1 có tần số xuất hiện là 3, khác vs số 2 và số 3 có tần số xuất hiện là 2 .

*/
// Đầu vào
$inputArray = [2, 2, 3, 1, 3, 1,4,4];

//Đặt mảng count bằng rỗng
$counts = [];

//Đếm số lần xuất hiện của mỗi phần tử trong mảng
foreach( $inputArray as $need_count ){
    //Đặt sẵn mỗi phần tử có giá trị bằng 0
    $counts[$need_count] = 0;

    //Duyệt mảng lại để đếm
    foreach( $inputArray as $number ){
        //Nếu phần tử đang đếm bằng number thì tăng lên 1 dv
        if( $need_count == $number ){
            $counts[$need_count]++;
        }
    }
}

// echo '<pre>';
// print_r($counts);
// die();
/*
Array
(
    [2] => 2
    [3] => 2
    [1] => 2
    [4] => 2

*/

//đặt biến equal = true
$equal = true;
//đặt first_value để lấy giá trị đầu tiên của mảng là 2
$first_value = current($counts);

//duyệt vòng lặp
foreach( $counts as $need_count => $count ){
    //nếu các phần tử khác ko bằng với 2 tức là sai
    if( $first_value != $count ){
        $equal = false;
    }
}

var_dump($equal);
