<?php
//в) Дан массив $arr. Выведите на экран первый и последний элемент данного массива
$arr = [5, 10, 15];
echo end($arr); // Вывоит последний элемент массива
echo current($arr); // Выводит данный(в этом случае первый) элемент массива
echo $arr[0]; //Выводит первый элемент массива, но ключи массива должны быть цифровыми.
print_r($arr[0]);