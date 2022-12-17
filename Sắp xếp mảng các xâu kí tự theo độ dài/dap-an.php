<?php
/*
Input: 1 chuỗi ký tự
abc b aaa a zz
Output: 1 chuỗi ký tự
b a zz abc aaa
*/
?>


<script>
/* BẮT ĐẦU ĐÁP ÁN */
function sortStringWithLength(s) {
    // Write your code here
    s = s.split(' ');
    let n = s.length;
    for (let i = 1 ; i < n; i++)
    {
        let temp = s[i];
        let j = i - 1;
        while (j >= 0 && temp.length < s[j].length)
        {
        s[j + 1] = s[j];
        j--;
        }
        s[j + 1] = temp;
    }
    return s.join(' ');
}
/* KẾT THÚC ĐÁP ÁN */

sortStringWithLength('abc b aaa a zz');
</script>


