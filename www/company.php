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


<section class="page-title">
    <div class="page-title__left-img"></div>
    <p>Дэни</p>
    <div class="page-title__right-img"></div>
</section>

<?php include "blocks/search.php"; ?>


<section class="company">
    <div class="container twelve-cols">
       <section class="company__filters">
           <?php include "blocks/filters.php"; ?>
       </section>
       <form action="send.php">
           <input type="search">
       </form>
       <div class="company__content">
            <div class="company__header"><span><h2>ООО Дэни</h2>
            <p>Полная правовая информация</p></span></div>
           <div class="company__table">
               <div><span>Организационно-правовая форма</span><p>ООО</p></div>
               <div><span>Год создания</span><p>28.10.2009</p></div>
               <div><span>ОГРН</span><p>1097746664707</p></div>
               <div><span>ИНФС</span><p>г. Москва</p></div>
               <div><span>С/Н</span><p>усн 6%</p></div>
               <div><span>Основной вид деятельности</span><p>Розничная торговля в неспециализированных магазинах</p></div>
               <div><span>Дополнительный вид деятельности</span><p></p></div>
               <div><span>Расчетный счет</span><p>Абсолют банк</p></div>
               <div><span>Обороты</span><p>2014 год - 100 000 р.<br>2015 год - 765 000 р.<br>2016 год - 1 750 300 р.</p></div>
               <div><span>Лицензия</span><p></p></div>
               <div><span>Стоимость компании</span><p>60 000 р.</p></div>
           </div>
           <div class="company__content__footer">
               <a class="button" href="#">Заказать звонок</a>
               <a class="button" href="#">Бронировать</a>
               <a class="button" href="#">Скачать pdf</a>
           </div>
       </div>
    </div>
</section>
<?php include "blocks/feedback.php"; ?>
<?php include "blocks/services.php"; ?>
<?php include "blocks/footer.php"; ?>
<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
