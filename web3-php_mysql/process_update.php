<?php
    $conn = mysqli_connect('localhost', 'root', '', 'opentutorials');
    $sql = "UPDATE topic SET title = '{$_POST['title']}', description = '{$_POST['description']}' WHERE id = {$_POST['id']}";
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
    } else {
        header('Location: /php/web3-php_mysql/index.php?id='.$_POST['id']);
    }
?>