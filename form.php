<?php
$color= $_GET['color'];
setcookie('color', $color);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>beckgraund</title>
</head>
<body style="background:<?=$_COOKIE['color']?> ">
<form method="get" action="<?=$_SERVER['PHP_SELF']?>">
    <select name="color">
        <option value="blue" name="blue">blue</option>
        <option value="green" name="green">green</option>
        <option value="red" name="red">red</option>
    </select>
    <input type="submit" value="start">
</form>

</body>
</html>
