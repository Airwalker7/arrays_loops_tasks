<?php
//6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
//$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
//$en = array('green', 'red','blue');
//$ru = array('зеленый', 'красный', 'голубой');
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
//$en = ['green', 'red','blue'];
//$ru = ['зеленый', 'красный', 'голубой'];

    foreach ($arr as $key => $val){
        $en[] = $key;
        $ru[] = $val;
    }
var_dump($en);
"<br>";
var_dump($ru);
"<br>";