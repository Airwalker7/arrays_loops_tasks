<?php
//15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива.
// Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.

$arr=[4, 2, 5, 19, 13, 0, 10];
    foreach ($arr as $val){
       echo count($arr, COUNT_RECURSIVE);
       break;
    }
