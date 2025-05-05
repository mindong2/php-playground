<?php
    $conn = mysqli_connect('localhost', 'root', '', 'opentutorials');
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
  
?>
