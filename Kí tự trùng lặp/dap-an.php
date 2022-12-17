<?php
/*
 * Complete the 'findChar' function below.
 *
 * The function is expected to return a STRING_ARRAY.: Hàm trả về mảng ký tự
 * The function accepts STRING s as parameter.: Nhận vào một chuỗi
 */
/* BẮT ĐẦU ĐÁP ÁN */
function findChar($s) {
    $inputArray = str_split($s);
    $counts = [];
    foreach( $inputArray as $need_count ){
        $counts[$need_count] = 0;
        foreach( $inputArray as $number ){
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

    if( count($numberDuplicates) == 0 ){
        return [-1];
    }

    return $numberDuplicates;
}
/* KẾT THÚC ĐÁP ÁN */

/* CHẠY THỬ */
var_dump( findChar('abcbdcef') );
echo '<hr>';
var_dump( findChar('abdcef') );

