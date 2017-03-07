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

<header>
    <div class="container">
        <div class="header-top">
            <div class="date">
                <span class="date-day">Среда , 8 Февраля 2017</span>
            </div>
            <div class="tel">
                <a href="tel:+74957232832">+7 (495) 723 28 32</a>
                <a href="tel:+79255327714">+7 (925) 532 77 14</a>
            </div>
            <div class="email">
                <a href="mailto:info@bazagf.ru"></a>
            </div>
            <div class="social">
                <a href="#" class="social-facebook" title="Facebook"></a>
                <a href="#" class="social-vk" title="VK"></a>
                <a href="#" class="social-ok" title="ok"></a>
                <a href="#" class="social-linkedIn" title="LinkedIn"></a>
                <a href="#" class="social-youtube" title="Youtube"></a>
            </div>
        </div>
        <div class="header-middle">
            <div class="logo">
                <a href="/"><img src="img/logo.xxx" alt="Логотип" title="База ГФ"></a>
            </div>
            <div class="banner-one">
                <a href="#"><img src="img/banner1" alt="Баннер1" title=""></a>
            </div>
            <div class="banner-two">
                <a href="#"><img src="img/banner1" alt="Баннер2" title=""></a>
            </div>
        </div>
        <div class="header-nav">
            <ul class="header-list">
                <li><a href="#" class="header-item">о нас</a></li>
                <li><a href="#" class="header-item">купить</a></li>
                <li><a href="#" class="header-item">продать</a></li>
                <li><a href="#" class="header-item">новости</a></li>
                <li><a href="#" class="header-item">контакты</a></li>
            </ul>
        </div>
    </div>
</header>

<section class="company">
    <div class="container">
       <p>ДЭНИ</p>
       <form action="send.php">
           <input type="search">
       </form>
       <div id="filters"></div>
       <div id="company-content">
           <div id="company-content-title">
               <h2>ООО Дэни</h2>
               Полная информация о компании
           </div>
           <div><span>Организационно-правовая форма</span>ООО</div>
           <div><span>Год создания</span>28.10.2009</div>
           <div><span>ОГРН</span>1097746664707</div>
           <div><span>ИНФС</span>г. Москва</div>
           <div><span>С/Н</span>усн 6%</div>
           <div><span>Основной вид деятельности</span>Розничная торговля в неспециализированных магазинах</div>
           <div><span>Дополнительный вид деятельности</span></div>
           <div><span>Расчетный счет</span>Абсолют банк</div>
           <div><span>Обороты</span>2014 год - 100 000 р.<br>2015 год - 765 000 р.<br>2016 год - 1 750 300 р.</div>
           <div><span>Лицензия</span></div>
           <div><span>Стоимость компании</span>60 000 р.</div>
           <div id="company-content-footer">
               <a href="#">Закзать звонок</a>
               <a href="#">Бронировать</a>
               <a href="#">Скачать pdf</a>
           </div>
       </div>
       <?php include "blocks/feedback.php"; ?>
    </div>
</section>

<footer>
    <?php include "blocks/footer.php"; ?>
</footer>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
