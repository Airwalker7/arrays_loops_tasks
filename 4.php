<?php
//4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.
//$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

    echo "<dl>" . 'Ключи массива:' . "</dl>";
foreach ($arr as $key => $element){
    echo "<dd>" . "$key" . "</dd>" . "<br>" ;
}

echo "<br>";
echo "<hr>";
echo "<br>";


echo "<dl>" . 'Элементы массива:' . "</dl>";
foreach ($arr as $key => $element){
    echo "<dd>" . "$element" . "</dd>" . "<br>" ;
}
