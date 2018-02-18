<?php
/**
 * 7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
*/

$allComments = null;
if (isset($_POST['comment']) && !empty($_POST['comment'])) {
    $newComment = $_POST['comment'];
    $file = fopen('allComments.txt', 'a+');
    fwrite($file, '<p>'.$newComment.'</p><hr>'.PHP_EOL);
    fclose($file);
}
if (file_get_contents('allComments.txt') != null) {
    $allComments = file_get_contents('allComments.txt');
}
echo $allComments;
//display form for add new comment
echo "<form action='index.php' method='post'>
        <input type='textarea' name='comment'>
        <input type='submit'>
    </form>";