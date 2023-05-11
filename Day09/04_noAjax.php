<?php
    header('Content-Type:text/html; charset=utf-8');

    $name = $_GET['name'];
    $email= $_GET['email'];

    // echo "$name  $email 이 등록되었습니다.";
    // form 요소를 통한 서버와의 통신은 현재 페이지가 바뀌는 것임
    // 그래서 기존페이지가 없어짐.
    // 만약. 그럼에도 기존페이지가 있는 것처럼 느끼게 하고 싶다면

    // 기존 페이지 html 을 그대로 echo 하면서 데이터변수만 적절한 위치에 출력
    echo("
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8'>
            <title>No AJAX</title>
        </head>
        <body>
    
            <h3>회원가입 페이지</h3>
    
            <form action='./04_noAjax.php' method='get'>
                <input type='text' name='name' value='$name'>
                <input type='text' name='email' value='$email'>
    
                <input type='submit'>
            </form>
    
            <hr>
            <!-- 서버로부터 응답된 결과를 보여주기 위해 요소 -->
            <textarea cols='50' row='3'>'$name' + '$email'</textarea>
            
        </body>
    </html>

    ")



?>