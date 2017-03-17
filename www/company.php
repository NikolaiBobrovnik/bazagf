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

<header class="header">
    <?php include "blocks/header.php"; ?>
</header>

<section class="company">
    <div class="container">
      <?php include "blocks/filters.php"; ?>
       <p>ДЭНИ</p>
       <form action="send.php">
           <input type="search">
       </form>
       <div class="company-content">
           <div class="company-content__title">
               <h2>ООО Дэни</h2>
               Полная информация о компании
           </div>
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
           <div class="company-content__footer">
               <a href="#">Закзать звонок</a>
               <a href="#">Бронировать</a>
               <a href="#">Скачать pdf</a>
           </div>
       </div>
       <?php include "blocks/feedback.php"; ?>
    </div>
    <?php include "blocks/feedback.php"; ?>
    <?php include "blocks/services.php"; ?>
</section>

<footer>
    <?php include "blocks/footer.php"; ?>
</footer>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
