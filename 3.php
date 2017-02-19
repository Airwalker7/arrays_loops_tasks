<?php
//3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
//С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.

$arr = [26, 17, 136, 12, 79, 15];
    $result = 0;
    $element = 0;
    foreach ($arr as $element){
        $val = $element*$element;
        $result =$result + $val;
    }
    echo 'Сумма квадратов элементов =' . $result;