<?php
//Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
//Директория и искомое слово задаются как параметры функции.


listFile('../functions_forms_tasks', 'textarea');
function listFile($dir, $word)
{
    $arr_dir = scandir($dir);
    foreach ($arr_dir as $file) {
        if (file_exists($dir . '/' . $file) && $file != '.' && $file != '..') {
            $text = file_get_contents($dir . '/' . $file);
            if (strripos($text, $word) == true) {
                echo '<b>' . $file . '</b><br>';
            }
        }
    }
}