<?php
/*
Yêu cầu: Cần tính số dư của phép chia B^P cho M (R = B^P mod M) với B và M là số tự nhiên có không quá 12 chữ số, P là số tự nhiên không quá 3 chữ số. Input
125 5 29

Output
5

Input Format
Dữ liệu vào gồm một dòng có 3 số tương ứng là B, P và M, các số cách nhau bởi dấu cách.

Constraints
Dữ liệu vào gồm một dòng có 3 số tương ứng là B, P và M, các số cách nhau bởi dấu cách.

Output Format
Kết quả gồm một dòng ghi kết quả số dư R tính được.
*/

/* BẮT ĐẦU ĐÁP ÁN */
function solve($B, $P, $M) {
    $R = ( $B ** $P ) % $M;
    return $R;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump(solve(125,5,29));