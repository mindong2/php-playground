<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <?php
    $name = $_GET['name'];
    $address = $_GET['address'];
    if(isset($name)){
        echo '안녕하세요 '.$name.'님. 주소는 '.$address.'입니다.';
    }else{
        echo '이름을 입력해주세요';
    }
    ?>
</body>
</html>