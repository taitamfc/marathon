<?php
/*
Mô tả:
Xếp hàng theo chiều cao tăng dần:
Một nhóm người đứng thành hàng trong công viên. Giữa họ có một số cây không thể di chuyển
Giá trị “-1” đại diện cho cây trong công viên.
 
Yêu cầu:
Nhiệm vụ của bạn là thay đổi vị trí của họ, sao cho chiều cao của họ tạo thành một dãy tăng dần (không tính cây). Chú ý rằng cây không thể di chuyển.

Input: [-1, 150, 190, 170, -1, -1, 160, 180]
Output: [-1, 150, 160, 170, -1, -1, 180, 190]

Input: -1, 150, 165, 170, -1, -1, 160, 180
Output: [-1, 150, 160, 165, -1, -1, 170, 180]

*/

//Thuat toan sap xep chon

$array = [-1, 150, 165, 170, -1, -1, 160, 180];
for ($i = 0; $i < count($array) - 1; $i++) {
    //nếu phần tử là -1 thì bỏ qua
    if( $array[$i] == - 1){
        continue;
    }
    $min = $i;
    for ($j = $i + 1; $j < count($array); $j++) {
        //nếu phần tử là -1 thì bỏ qua
        if( $array[$j] == - 1){
            continue;
        }
        if ($array[$j] < $array[$min]) {
            $min = $j;
        }
    }
    $t = $array[$min];
    $array[$min] = $array[$i];
    $array[$i] = $t;
}

echo '<pre>';
print_r($array);
die();