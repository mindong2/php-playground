<?php
    $conn = mysqli_connect('localhost', 'root', '', 'opentutorials');
    $sql = "DELETE FROM topic WHERE id = {$_GET['id']}";
    mysqli_query($conn, $sql);
    if($sql === false){
        echo '삭제하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
    } else {
        header('Location: /php/web3-php_mysql/index.php');
    }

?>