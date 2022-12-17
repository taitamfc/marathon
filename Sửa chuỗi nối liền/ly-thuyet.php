<?php
/*
Level: Trung bình
Mô tả
Chương trình sửa lại xâu kí tự:
Cho một xâu kí tự s gồm nhiều từ. Trong đó mỗi từ sẽ được bắt đầu bởi một kí tự in hoa.
Vì một lí do gì đó, người ta quên chèn các khoảng trắng giữa các từ.
 
Yêu cầu
Hãy viết chương trình sửa lại xâu kí tự đó theo yêu cầu sau: 
Tách các từ, và thêm 1 kí tự cách (space) giữa 2 từ liên tiếp
Chuyển đổi các kí tự in hoa thành kí tự in thường
 
Input: 1 chuỗi ký tự
 
Output: 1 chuỗi ký tự

Ví dụ:
-         Với s = "CodegymDaNang", thì kết quả amendTheSentence(s) = "codegym da nang"
-         Với s = "Hello", thì kết quả amendTheSentence(s) = "hello"
*/
$upperString = 'QWERTYUIOPASDFGHJKLZXCVBNM';
$s = "CodegymDaNang";
//chuyen chuoi thanh mang
$s_arr = str_split($s);

foreach( $s_arr as $val ){
    //kiem tra ky tu co nam trong chuoi VIET HOA hay ko
    if( $find = strpos($upperString,$val) !== false ){
        //thay the chuoi hien tai
        $s = str_replace($val,' '.strtolower($val),$s);
    }
}

//xoa bo ky tu khoang trang 2 dau chuoi
$s = trim($s);

var_dump($s);
// echo '<pre>';
// print_r($s_arr);
// die();

