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
        // SQL Injection 공격 방지 
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
    <a href="create.php">create</a>
    <?php
    if(isset($_GET['id'])){
        ?>
        <a href="update.php?id=<?=$_GET['id']?>">update</a>
        <div 
        onclick="if(confirm('정말 삭제하시겠어요?')){location.href='process_delete.php?id=<?=$_GET['id']?>';}"
        style="cursor: pointer; display: inline-block;"    
        >delete</div>
        <?php
    }
    ?>
<h2><?=$article['title']?></h2>
<?=$article['description']?>
</body>
</html>