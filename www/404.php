<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body>

    <?php include "blocks/header.php"; ?>


    <?php include "blocks/menu.php"; ?>


<div class="bg__404">
    <section class="page-404">
        <div class="container page-404__container">
            <div class="page-404__left six-col"><h1>404</h1></div>
            <div class="page-404__right six-col"><div class="page-404__right__adaptive"><h2>Страница <span>не найдена</span></h2></div> <p>Простите, но запрашиваемая страница не найдена или не существует. Перейдите на <a href="index.php">главную</a>, или воспользуйтесь поиском.</p></div>
        </div>
        <section class="search search__404">
            <?php include "blocks/search.php"; ?>
        </section>
    </section>
</div>


    <?php include "blocks/feedback.php"; ?>

    <?php include "blocks/footer.php"; ?>


<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
