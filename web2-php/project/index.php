<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['description'])){
        $title =  $_POST['title'];
        $description = $_POST['description'];
    }
    
    print_r($_POST);

    print_r($_POST['gender1']);
    ?>

    <h1>title</h1>
    <h1><?= $title; ?></h1>
    <p>description</p>

    <h2><?= $description; ?></h2>
</body>
</html>