<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP site | Контактная форма</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php require 'blocks/header.php'?>
<div class="container mt-5">
    <h2>Контактная форма</h2>
    <form action="check.php" method="POST">
        <input type="emai" name="email" placeholder="Введите email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
        <button class="btn btn-success" type="submit" name="send">Отправить</button>
    </form></div>

<?php require 'blocks/footer.php'?>



</body>
</html>
