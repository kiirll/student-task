<!DOCTTYPE html>
<html>
<head>
    <title>Students</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
</head>
<body>
<h1>Регистрация абитуриента</h1>
<form action="registery" method="post">
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="" required>
    </div>
    <div>
        <label for="name">Имя</label>
        <input type="text" id="name" name="name" class="" required>
    </div>
    <div>
        <label for="surname">Фамилия</label>
        <input type="text" id="surname" name="surname" class="" required>
    </div>
    <div>
        <label for="father">Отчество</label>
        <input type="text" id="father" name="father" class="" required>
    </div>
    <div>
        <label for="group">Группа</label>
        <input type="text" id="group" name="group" class="" required>
    </div>
    <div>
        <label for="score">Баллы</label>
        <input type="number" id="score" name="score" class="" required>
    </div>
    <input type="submit" value="Зарегистрироватся">
</form>


<?php if(isset($_SESSION['error'])){ ?>
    <div class="success"><?=$_SESSION['error']?></div>
<?php }
unset($_SESSION['error']);

?>

</body>
</html>
