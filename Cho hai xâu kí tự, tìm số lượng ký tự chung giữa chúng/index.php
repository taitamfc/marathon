<?php
/*
Yêu cầu:
Cho hai xâu kí tự, tìm số lượng ký tự chung giữa chúng.
 
Input:
Dòng đầu tiên là 1 chuỗi ký tự
Dòng thứ 2 là 1 chuỗi ký tự khác cần so sánh với chuỗi trên
 
Output: 1 giá trị số nguyên
Ví dụ:
-         Với s1 = "aabcc" và s2 = "adcaa", thì kết quả commonCharacterCount(s1, s2) = 3.
Vì xâu s1 và s2 có 3 kí tự chung: 2 kí tự 'a' và 1 kí tự 'c'.

*/

$s1 = "aabcc";
$s2 = "adcaa";

//Chuyen chuoi $s1 thang mang
$s1_arr = str_split($s1);
//Chuyen chuoi $s2 thang mang
$s2_arr = str_split($s2);

$counts = [];
//Lap s1_arr
foreach( $s1_arr as $s1 ){
    $counts[$s1] = 0;
    //so sanh tung phan tu trong s1_arr voi s2 trong s2_arr
    foreach( $s2_arr as $s2 ){
        if( $s1 == $s2 ){
            $counts[$s1]++;
        }
    }
}

/*
Array
(
    [a] => 3
    [b] => 0
    [c] => 1
)
*/
// echo '<pre>';
// print_r($counts);
// die();

/* Duyet mang $counts, va dem cac phan tu co gia tri > 0, thi se duoc 2 */

$numberEqual = 0;
foreach( $counts as $count ){
    if( $count > 0 ){
        $numberEqual++;
    }
}

var_dump($numberEqual);
