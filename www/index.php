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

<section class="table">
<!--   Как это будет работать.
       Стандартная таблица для десктопа будет исспользовать свойство css3 columns, благодаря которому будет создано 12коллонок, ширина которых
       будет автоматически определятся браузером

       А в адаптивной версии будут использоваться свойство flex-box c параметром justify-content:space-between тогда будет виден присок с описанием в span и значением в виде обычного текста-->
    <div class="container">
        <div id="table-header">
            <div>Название</div>
            <div>ОПФ</div>
            <div>Год создания</div>
            <div>ОГРН</div>
            <div>ИФНС</div>
            <div>С/Н</div>
            <div>Основной вид деятельности</div>
            <div>Расчетный счет</div>
            <div>Обороты</div>
            <div>Лицензия</div>
            <div>Стоймость компании</div>
            <div>Дополнительно</div>
        </div>
        <div id="table-content">
            <div id="table-item">
                <div><span>Название</span><a href="#">Дэни</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>28.10.2009</div>
                <div><span>ОГРН</span>1167746472420</div>
                <div><span>ИФНС</span>5</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>47.1 Розничная торговля в неспециализированных ...</div>
                <div><span>Расчетный счет</span>Абсолют банк</div>
                <div><span>Обороты</span>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>60 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Вечность</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>17.05.2016</div>
                <div><span>ОГРН</span>1167746472420</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>ОСНО</div>
                <div><span>Основной вид деятельности</span>41.20 Строительство жилых и нежилыж ...</div>
                <div><span>Расчетный счет</span>ВТБ 24</div>
                <div><span>Обороты</span>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>110 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Континиуум</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>11.10.2013</div>
                <div><span>ОГРН</span>1137746937646</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>ОСНО</div>
                <div><span>Основной вид деятельности</span>64.91 Деятельность по финансовой аренде ...</div>
                <div><span>Расчетный счет</span>ООО “Экспонат” и Московском Парижском     банке</div>
                <div><span>Обороты</span>2013 - 50 000 р.<br>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>40 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Этлос.ком</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>02.02.2015</div>
                <div><span>ОГРН</span>1157746067214</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>74.50 Найм рабочей силы и подбор персонала</div>
                <div><span>Расчетный счет</span>Райффайзен банк</div>
                <div><span>Обороты</span>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>100 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">М фреш</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>19.02.2013</div>
                <div><span>ОГРН</span>1137746139080</div>
                <div><span>ИФНС</span>02</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>93.04 Физкультурно-оздоровительная деятельность</div>
                <div><span>Расчетный счет</span>Межрегиональный почтовый банк</div>
                <div><span>Обороты</span>2013 - 50 000 р.<br>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>50 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Арт</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>28.11.2014</div>
                <div><span>ОГРН</span>5147746413392</div>
                <div><span>ИФНС</span>20</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>46.71 Торговля оптовая твердым, жидкими ...</div>
                <div><span>Расчетный счет</span>Сбербанк</div>
                <div><span>Обороты</span>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>45 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Европейский энергетический союз</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>18.06.2015</div>
                <div><span>ОГРН</span>1157746551368</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>32.11 Производство электроэнергии</div>
                <div><span>Расчетный счет</span>Райффайзен банк</div>
                <div><span>Обороты</span>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>95 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Вечность</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>17.05.2016</div>
                <div><span>ОГРН</span>1167746472420</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>ОСНО</div>
                <div><span>Основной вид деятельности</span>41.20 Строительство жилых и нежилыж ...</div>
                <div><span>Расчетный счет</span>ВТБ 24</div>
                <div><span>Обороты</span>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>110 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Континиуум</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>11.10.2013</div>
                <div><span>ОГРН</span>1137746937646</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>ОСНО</div>
                <div><span>Основной вид деятельности</span>64.91 Деятельность по финансовой аренде ...</div>
                <div><span>Расчетный счет</span>ООО “Экспонат” и Московском Парижском     банке</div>
                <div><span>Обороты</span>2013 - 50 000 р.<br>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>40 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Этлос.ком</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>02.02.2015</div>
                <div><span>ОГРН</span>1157746067214</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>74.50 Найм рабочей силы и подбор персонала</div>
                <div><span>Расчетный счет</span>Райффайзен банк</div>
                <div><span>Обороты</span>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>100 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">М фреш</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>19.02.2013</div>
                <div><span>ОГРН</span>1137746139080</div>
                <div><span>ИФНС</span>02</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>93.04 Физкультурно-оздоровительная деятельность</div>
                <div><span>Расчетный счет</span>Межрегиональный почтовый банк</div>
                <div><span>Обороты</span>2013 - 50 000 р.<br>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>50 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Арт</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>28.11.2014</div>
                <div><span>ОГРН</span>5147746413392</div>
                <div><span>ИФНС</span>20</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>46.71 Торговля оптовая твердым, жидкими ...</div>
                <div><span>Расчетный счет</span>Сбербанк</div>
                <div><span>Обороты</span>2014 - 100 000 р.<br>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>45 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
            <div id="table-item">
                <div><span>Название</span><a href="#">Европейский энергетический союз</a></div>
                <div><span>ОПФ</span>ООО</div>
                <div><span>Год создания</span>18.06.2015</div>
                <div><span>ОГРН</span>1157746551368</div>
                <div><span>ИФНС</span>23</div>
                <div><span>C/Н</span>УНС 6%</div>
                <div><span>Основной вид деятельности</span>32.11 Производство электроэнергии</div>
                <div><span>Расчетный счет</span>Райффайзен банк</div>
                <div><span>Обороты</span>2015 - 200 000 р.<br>2016 - 300 000 р.</div>
                <div><span>Лицензия</span></div>
                <div><span>Стоймость компании</span>95 000 р.</div>
                <div><span>Дополнительно</span><a href="#">Бронировать</a><br><a href="#">Скачать инф.</a></div>
            </div>
        </div>
    </div>
</section>

<footer>
    <?php include "blocks/footer.php"; ?>
</footer>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
