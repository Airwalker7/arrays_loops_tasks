<?php
//24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе.
// Например: цифра 5 в числе 442158755745 встречается 4 раза.
$v=442158755745;
echo substr_count($v, 5); //substr_count — Возвращает число вхождений подстроки