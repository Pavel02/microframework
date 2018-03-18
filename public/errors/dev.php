<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ошибка</title>
</head>
<body>

<h1>Произошла ошибка!</h1>
<p><strong>Код ошибки:</strong> <?= $errno ?></p>
<p><strong>Текст ошибки:</strong> <?= $errstr ?></p>
<p><strong>Файл, в котором произошла ошибка:</strong> <?= $errfile ?></p>
<p><strong>Строка, в которой произошла ошибка:</strong> <?= $errline ?></p>

</body>
</html>