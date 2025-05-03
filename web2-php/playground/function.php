<?php
    require_once 'function2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function hello($name){
        echo nl2br('Lorem ipsum
         dolor sit amet 
         consectetur adipisicing elit. 
         Quisquam, quos'. $name. ' 님!');
    }
    
    function sum($a, $b) {
        return $a + $b;
    }
    ?>

<ul>
    <?php
    $num = strlen('Hello World!');
    $str = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos';
    echo $num;
    echo strpos($str, 'shy') === false ? 'shy가 포함되어 있지 않습니다.' : 'shy가 포함되어 있습니다.';
    echo  hello('홍길동');
    echo returnMyId();
?>
    <?php
    $arr = ['1','2','3','4','5'];
    array_push($arr, '6');
    
    print_r($arr);
    
    
    foreach($arr as $index => $value){

        ?>
        <li><?= $value; ?>, index is : <?= $index; ?>, count is : <?= count($arr); ?>, </li>
        <?php
    }

    
    ?>


<?php 
$list = array_filter(scandir('.'), function($v){
    return $v !== '.' && $v !== '..'; 
});
foreach($list as $value){        
        ?>
        <li style="list-style: none; color: red;"><?= $value; ?>, <?= count($list); ?></li>
        <?php
}
?>
    </ul>

    <pre>
        <?php
            print_r($arr);
        ?>
    </pre>
</body>
</html>