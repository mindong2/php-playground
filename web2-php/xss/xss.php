<?php
    $title = $_POST['title'] ?? '<script>alert("Hello");</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cross site scriptiong</h1>
    <!-- <?php 
    echo $title;
    ?> -->

    <!-- 
        htmlspecialchars -> XSS방지 메소드 유저가 입력할 수 있는 무언가를 문자열로 변환해줌
        예를들어 textarea에서 입력한 문자열을 그대로 출력하면 스크립트 태그가 실행되어 경고창이 뜨는데
        이 메소드를 사용하면 스크립트 태그가 문자열로 변환되어 경고창이 뜨지 않음
    -->
    <?php 
    echo htmlspecialchars($title);
    ?>
    

</body>
</html>