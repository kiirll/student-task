<!DOCTTYPE html>
<html>
<head>
    <title>Students</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.css">
    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/bootstrap.js"></script>

</head>
<body>

<h1><a href="http://<?=$_SERVER['HTTP_HOST']?>">Абитуриенты</a></h1>

<table  class="table table-striped">
    <tr>
        <th>Имя
            <a href="/students/name/asc"><span class="glyphicon glyphicon-menu-up"></span></a>
            <a href="/students/name/desc"><i class="glyphicon glyphicon-menu-down"></i></a>
        </th>
        <th>Фамилия
            <a href="/students/surname/asc"><i class="glyphicon glyphicon-menu-up"></i></a>
            <a href="/students/surname/desc"><i class="glyphicon glyphicon-menu-down"></i></a>
        </th>
        <th>Отчество
            <a href="/students/father/asc"><i class="glyphicon glyphicon-menu-up"></i></a>
            <a href="/students/father/desc"><i class="glyphicon glyphicon-menu-down"></i></a>
        </th>
        <th>Группа
            <a href="/students/group/asc"><i class="glyphicon glyphicon-menu-up"></i></a>
            <a href="/students/group/desc"><i class="glyphicon glyphicon-menu-down"></i></a>
        </th>
        <th>Баллы
            <a href="/students/score/asc"><i class="glyphicon glyphicon-menu-up"></i></a>
            <a href="/students/score/desc"><i class="glyphicon glyphicon-menu-down"></i></a>
        </th>
    </tr>
    <?php foreach ($result as $stud){ ?>
        <tr>
            <td><?=$stud['name']?></td>
            <td><?=$stud['surname']?></td>
            <td><?=$stud['father']?></td>
            <td><?=$stud['group']?></td>
            <td><?=$stud['score']?></td>

        </tr>

    <?php } ?>
</table>



</body>
</html>
