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

        <?php include "blocks/slider.php"; ?>

        <?php include "blocks/search.php"; ?>

        <?php include "blocks/filters.php"; ?>

        <?php include "blocks/table.php"; ?>

        <?php include "blocks/aboutus.php"; ?>

        <?php include "blocks/feedback.php"; ?>

        <?php include "blocks/services.php"; ?>

        <?php include "blocks/news.php"; ?>

        <section class="popup__contact-us">
            <section class="popup__contact-us__title">
                <p>ОБРАТНАЯ СВЯЗЬ</p>
            </section>
            <form action="send.php" class="popup__contact-us__form">
                <input type="text" name="name" placeholder="Ваше имя или название организации">
                <input type="email" name="email" placeholder="E-mail">
                <input type="tel" name="tel" placeholder="Контектный телефон">
                <textarea name="message" cols="30" placeholder="Сообщение" rows="10"></textarea>
                <button type="submit" class="button button-blue">Отправить</button>
            </form>
        </section>
        <section class="popup__small">
            <div class="popup__small__header__gradient">
                <div class="popup__small__header">
                    <h2>Спасибо за обращение</h2>
                    <p>Мы ответим на ваше сообщение<br>как можно скорее.</p>
                </div>
            </div>
            <div class="popup__small__footer">
                <ul class="social-media">
                    <li><a href="#" class="social-media__facebook"></a></li>
                    <li><a href="#" class="social-media__vk"></a></li>
                    <li><a href="#" class="social-media__ok"></a></li>
                    <li><a href="#" class="social-media__linkedin"></a></li>
                    <li><a href="#" class="social-media__youtube"></a></li>
                </ul>
            </div>
        </section>

        <section class="popup__small">
            <div class="popup__small__header__gradient__download">
                <div class="popup__small__header">
                    <h2>Полная информация о<br>компании</h2>
                    <p>Если скачивание не началось, то перейдите по <a href="#">ссылке</a></p>
                </div>
            </div>
            <div class="popup__small__footer">
                <ul class="social-media">
                    <li><a href="#" class="social-media__facebook"></a></li>
                    <li><a href="#" class="social-media__vk"></a></li>
                    <li><a href="#" class="social-media__ok"></a></li>
                    <li><a href="#" class="social-media__linkedin"></a></li>
                    <li><a href="#" class="social-media__youtube"></a></li>
                </ul>
            </div>
        </section>

        <?php include "blocks/footer.php"; ?>
        <?php include "blocks/forms.php"; ?>
        <?php include "blocks/scripts.php"; ?>
    </body>
</html>
