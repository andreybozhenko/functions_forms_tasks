<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.02.2018
 * Time: 19:09
 */


$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
$exp = explode(" ", $string);
foreach ($exp as $value)
    $c [$value] = substr_count($string, $value);
arsort ($c);
foreach ($c as $key => $sum){
    echo "$key = $sum<br>";
}