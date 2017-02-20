<?php
//25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
// найти максимальное и минимальное значение и поменять их местами
for ($i=0; $i<10; $i++){
    $arr[]=rand(1,20);
}
var_dump($arr);
$min_arr=min($arr);
echo 'Минимальное значение в массиве =' . "$min_arr" . "<br>";
$max_arr=max($arr);
echo 'Максимальное значение в массиве =' . "$max_arr" . "<br>";


$min_key = array_search($min_arr, $arr);
echo "минимальный ключ: $min_key<br>" ;
$max_key = array_search($max_arr, $arr);
echo "максимальный ключ: $max_key<br><hr>" ;

$arr[$min_key] = $max_arr;
$arr[$max_key] = $min_arr;

echo "Замена:" . "<br>";
var_dump($arr);
