<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="Cal.php">
        <select name="fruits">
            <option value="Subparot">Subparot</option>
            <option value="Lingi">Lingi</option>
            <option value="Orange">Orange</option>
        </select>
        <br>
        ขนาดภาพ <input type="number" name="size" min="100" max="500"/>
        <p>Please select Kg :</p>
        <input type="radio"  name="kg" value="1">
        1<br>
        <input type="radio"  name="kg" value="2">
        2<br>
        <input type="radio"  name="kg" value="3">
        3<br>
        <input type="submit" value="submit" />
    </form>
</body>
</html>