<?php
/*
Input Format
1 mang 2 chieu

Output 
1 mang chua cac so nguyen to
 */

 /* BẮT ĐẦU ĐÁP ÁN */
function solve($arr) {
    $mang_so_nt = [];
    foreach( $arr as $numbers ){
        foreach( $numbers as $number ){
            if( $number > 1 ){
                $is_snt = true;
                for( $i = 2; $i < $number; $i++ ){
                    if( $number % $i == 0 ){
                        $is_snt = false;
                    }
                }
                if($is_snt == true){
                    $mang_so_nt[$number] = $number;
                }
            }
            
        }
    }
    
    if( count($mang_so_nt) ){
        sort($mang_so_nt);
        return $mang_so_nt;
    }
    return [-1];
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( solve(
    [
        [1, 2, 8, 43],
        [9, 4, 11, 7],
        [11, 6, 4, 0],
        [1, 2, 6, 51]
    ]
) );
echo '<hr>';