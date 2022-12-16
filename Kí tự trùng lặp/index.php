<?php
/*
Viết hàm truyền vào một chuỗi findChar(string) 
Hàm trả về 1 mảng chứa các ký tự xuất hiện nhiều hơn 1 lần trong chuỗi. Nếu không có ký tự nào xuất hiện nhiều hơn 1 lần thì trả về mảng rỗng
 
Input: 1 chuỗi ký tự
 
Output: 1 mảng ký tự
Ví dụ: 
-         findChar (“abcbdcef”) => [b,c]
-         findChar (“abdcef”) => []

*/
// Đầu vào
$s = 'abcbdcef';
$inputArray = str_split($s);

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
$numberDuplicates = [];
foreach( $counts as $key => $count ){
    if( $count > 1 ){
        $numberDuplicates[] = $key;
    }
}
echo '<pre>';
print_r($numberDuplicates);
die();