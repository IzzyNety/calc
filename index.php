<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="result.php" method="post">
    <input type="text" name="first-value">
    <select name="math-op">
        <option value="addition">+</option>
        <option value="subtraction">-</option>
        <option value="multiplication">×</option>
        <option value="division">÷</option>
    </select>
    <input type="text" name="second-value">
    <input type="submit" name="submit" value="Посчитать!">
</form>
</body>
</html>