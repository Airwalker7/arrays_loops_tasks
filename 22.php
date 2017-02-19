<?php
//<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
//xx<br>
//xxxx<br>
//xxxxxx<br>
//xxxxxxxx<br>
//xxxxxxxxxx</p>


$n=5;
$a = 'xx';
$i=1;
while ($i<=$n) {
    for ($j=1;$j<=$i;$j++) {
        echo "$a";
    }
    echo '</br>';
    $i++;
}