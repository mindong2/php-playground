<?php
    $conn = mysqli_connect('localhost', 'root', '', 'opentutorials');
    $sql = "INSERT INTO topic (title, description, created) VALUE ('MySQL2', 'MySQL2 is ...', NOW())";
    echo $sql;
    mysqli_query($conn, $sql); // return true or false
    if($sql){
        echo '성공';
    }else{
        echo mysqli_error($conn);
    }
?>