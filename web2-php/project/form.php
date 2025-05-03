<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="title" placeholder="제목">
        <input type="text" name="description" placeholder="설명">
        <br/>
        gender1 <input type="checkbox" name="gender1" id="gender1" required><br/>
        gender2 <input type="checkbox" name="gender2" id="gender2" required><br/>
        male <input type="radio" name="gender3" value="male" id="gender3"><br/>
        female <input type="radio" name="gender3" value="female" id="gender4"><br/>
        <input type="submit" value="전송">
    </form>
</body>
</html>