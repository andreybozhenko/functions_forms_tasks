<?php
//Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
//Реализовать с помощью функции.
function getTop3Words($a) {
    $arr_words = explode(" ", $a);
    usort($arr_words, function($b, $c){
        return (mb_strlen($c) - mb_strlen($b));
    });
    $result = array_slice($arr_words, 0, 3);
    return print_r($result);
}
if (!empty($_POST['text_1'])) {
    getTop3Words($_POST['text_1']);
}
?>


<form method="post" action="2.php">
    <textarea name="text_1" cols="25" rows="15"></textarea>
    <div>
        <input type="submit">
    </div>
</form>