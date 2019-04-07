<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>Name</label>
        <input type="text" value="<?=$form->getName()?>" name="input-name"/>
        <button type="submit" name="test-form-button">submit</button>
    </form>
</body>
</html>