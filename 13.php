<?php
/**
 * 13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня
 * черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня
 * вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
 * Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите в виде списка в порядке уменьшения
 * количества:
 * Пример вывода:
 * яблоко – 12
 * черешня – 8
 * груша – 5
 * слива - 3
 */


$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко 
черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня 
вишня черешня черешня груша яблоко черешня вишня';
$exp = explode(' ', $string);
foreach ($exp as $value)
    $c [$value] = substr_count($string, $value);
arsort($c);
foreach ($c as $key => $count) {
    echo "$key - $count<br>";
}

//почему выводит черешню и вишню еще по разу?
/*черешня - 13
*вишня - 13
*яблоко - 8
*груша - 4
*черешня - 1
*вишня - 1
 */