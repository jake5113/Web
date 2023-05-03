<?php
    header("Content-Type:text/html; charset=utf-8");

    // 사용자로부터(form 요소) GET방식으로 전달된 데이터 받기
    $title = $_GET['title'];
    $message = $_GET['msg'];

    // 잘 받았는지 확인하고자 사용자에게 응답(Response)
    echo "제목 : $title <br>";
    echo "메세지 : $message";

?>