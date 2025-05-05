<?php
    $conn = mysqli_connect('localhost', 'root', '', 'opentutorials');
    
    $title = mysqli_real_escape_string($conn, htmlspecialchars($_POST['title']));
    $description = mysqli_real_escape_string($conn, htmlspecialchars($_POST['description']));
    
    $sql = "
    INSERT INTO topic (title, description, created)
    VALUES (
        '{$title}',
        '{$description}',
        NOW()
    )
    ";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '성공 <a href="/php/web3-php_mysql/index.php">돌아가기</a>';
    }else{
        // 아파치 서버 로그에 오류 메시지 저장
        error_log(mysqli_error($conn));
        echo '실패';
    }
    
?>