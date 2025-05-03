<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
function returnMyId(){
    if(isset($_GET['name'])){
        echo $_GET['name'];
    }
}
?>

<h1>
    <?php returnMyId();?>
</h1>

</body>
</html>