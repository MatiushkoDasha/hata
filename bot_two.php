<?php
if ($_POST) {
    try {
        $textmasage = $_POST['textmasage'];
        $tell = $_POST['tell'];
        $tema = $_POST['tema'];
        $textarea = $_POST['textarea'];
    } catch (\Throwable $th) {
        $textmasage = "ERROR IN MESSAGE";
        $tell = "ERROR IN MESSAGE";
        $tema = "ERROR IN MESSAGE";
        $textarea = "ERROR IN MESSAGE";
    }



    $token = "7195103097:AAHrRNWG-XpHxbYYLr4qK1DOSA10JqIGEl4";
    $chat_id = "1535956153";


    $textmasage = urlencode("$textmasage");
    $tell = urlencode("$tell");
    $tema = urlencode("$tema");
    $textarea = urlencode("$textarea");
    $urlQuery = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" .
    "Новий грішник" . "%0A%0A" .
    "Name : <b> " . $textmasage . "</b>%0A" .
    "Number : <b> " . $tell . "</b>%0A" .
    "Tema : <b> " . $tema . "</b>%0A"  .
    "Text : <b> " . $textarea . "</b>%0A" ;

    $urlQuery .= "&parse_mode=HTML";
    $result = file_get_contents($urlQuery);
}
?>