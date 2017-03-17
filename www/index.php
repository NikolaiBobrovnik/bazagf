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

<section class="menu">
    <?php include "blocks/menu.php"; ?>
</section>

<section class="slider">
    <?php include "blocks/slider.php"; ?>
</section>

<section class="search">
    <?php include "blocks/search.php"; ?>
</section>

<section class="filters">
    <?php include "blocks/filters.php"; ?>
</section>

<section class="table">
    <?php include "blocks/table.php"; ?>
</section>

<section class="aboutus">
    <?php include "blocks/aboutus.php"; ?>
</section>

<section class="feedback">
    <?php include "blocks/feedback.php"; ?>
</section>

<section class="services">
    <?php include "blocks/services.php"; ?>
</section>

<section class="news">
    <?php include "blocks/news.php"; ?>
</section>

<!-- <section class="popup-contactus">
    <div class="popup__contact-us">
        <section class="page-title popup-title">
            <div class="page-title__left-img"></div>
            <p>Новости</p>
            <div class="page-title__right-img"></div>
        </section>
        <form action="send.php" class="popup-contact-us">
            <input type="text" name="name" placeholder="Ваше имя или название организации">
            <input type="email" name="email" placeholder="E-mail">
            <input type="tel" name="tel" placeholder="Контектный телефон">
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit">
        </form>
    </div>
</section> -->

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
