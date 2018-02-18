<?php

//Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.

function show_files($directory) {
    $directory = '../functions_forms_tasks' . $directory;
    return scandir($directory);
}
print_r (scandir(__DIR__));