<?php
    $conn = mysqli_connect('localhost', 'root', '', 'opentutorials');
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
  

    $article = array(
        'title' => 'Welcome',
        'description' => 'Hello world'
    );

    if(isset($_GET['id'])){
        $filtered_id = mysqli_real_escape_string($conn, htmlspecialchars($_GET['id']));
        $sql = "SELECT * FROM topic WHERE id = {$filtered_id}";
        $result = mysqli_query($conn, $sql);
        $article = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>

    <ol>
    <?php
        foreach($rows as $row){
    ?>
            <li><a href="index.php?id=<?=$row['id']?>"><?=$row['title']?></a></li>
    <?php
        }
    
    ?>
    </ol>
    <form action="process_update.php" method="post">
        <input type="hidden" name="id" value="<?=$article['id']?>"
        <p>
        <p>
            <input type="text" name="title" placeholder="title" value="<?=$article['title']?>">
        </p>
        <p>
            <textarea name="description" placeholder="description"><?=$article['description']?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
</body>
</html>