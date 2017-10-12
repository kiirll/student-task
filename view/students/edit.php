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
<h1>Редактирование абитуриента</h1>
<form action="registery" method="post">
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="" required value="<?=$result['email']?>" >
    </div>
    <div>
        <label for="name">Имя</label>
        <input type="text" id="name" name="name" class="" required value="<?=$result['name']?>">
    </div>
    <div>
        <label for="surname">Фамилия</label>
        <input type="text" id="surname" name="surname" class="" required value="<?=$result['surname']?>">
    </div>
    <div>
        <label for="father">Отчество</label>
        <input type="text" id="father" name="father" class="" required value="<?=$result['father']?>">
    </div>
    <div>
        <label for="group">Группа</label>
        <input type="text" id="group" name="group" class="" required value="<?=$result['group']?>">
    </div>
    <div>
        <label for="score">Баллы</label>
        <input type="number" id="score" name="score" class="" required value="<?=$result['score']?>">
    </div>
    <input type="submit" value="Сохранить изменения">
</form>
<?php if(isset($_SESSION['success'])){ ?>
    <div class="success"><?=$_SESSION['success']?></div>
<?php }
unset($_SESSION['success']);

?>

</body>
</html>
