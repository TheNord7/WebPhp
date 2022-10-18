<h1><?= $pageHeader ?></h1>
<a href="/">Главная</a>
<?php if ($username == null) : ?>
    <a href="/?controller=security">Авторизация</a>

<?php endif ?>

<?php if ($username !== null) : ?>
    <a href="/?controller=tasks">Задачи</a>
<?php endif ?><br>

<?php if ($username !== null) : ?>
    <a href="?action=logout">[Выход]</a></p>
<?php endif ?><br>
