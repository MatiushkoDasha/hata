<?php
if ($_POST) {
    try {
        $text = $_POST['text'];
        $number = $_POST['number'];
    } catch (\Throwable $th) {
        $text = "ERROR IN MESSAGE";
        $number = "ERROR IN MESSAGE";
    }



    $token = "7195103097:AAHrRNWG-XpHxbYYLr4qK1DOSA10JqIGEl4";
    $chat_id = "1535956153";


    $text = urlencode("$text");
    $number = urlencode("$number");
    $urlQuery = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" .
    "heloo" . "%0A%0A" .
    "Name : <b> " . $text . "</b>%0A" .
    "Number : <b> " . $number . "</b>%0A" ;

    $urlQuery .= "&parse_mode=HTML";
    $result = file_get_contents($urlQuery);
}
?>