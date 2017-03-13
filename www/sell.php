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
    <?php include "blocks/header.php"; ?>
</header>

<section class="page-title">
    <div class="page-title__left-img"></div>
    <p>Продать</p>
    <div class="page-title__right-img"></div>
</section>

<section class="sell">
    <div class="container">
        <div class="sell__header"><span><h2>Анкета на размещение компании в базе готовых фирм</h2>
        <p>Уважаемые посетители!<br>Заполняйте анкету согласно примерам и вносите максимально полную информацию о продаваемой компании.</p></span></div>
        <form action="send.php" class="sell__form">
            <div class="sell__form__col">
                <input type="text" placeholder="Ваше имя" required><br>
                <input type="tel" placeholder="Номер телефона" required><br>
                <input type="email" placeholder="E-mail" required><br>
                <input type="text" placeholder="Сокращенное наименование организации" required>
                <input type="text" placeholder="Вид деятельности основной (ОКВЭД)" required>
                <input type="text" placeholder="ИФНС" required>
                <input type="text" placeholder="В каком банке открыт счет" required>
                <input type="text" placeholder="Наличие лицензий, разрешений, кассового аппарата и др." required>
                <input type="text" placeholder="Система налогообложения" required>
                <input type="text" placeholder="Действующая ли компания по сей день" required>
                <input type="text" placeholder="Баланс" required>
                <input type="text" placeholder="Желаемая сумма продажи" required>
            </div>
            <div class="sell__form__col">
                <input type="text" placeholder="Полное наименование организации">
                <input type="text" placeholder="Дата регистрации компании (год создания)">
                <input type="text" placeholder="Форма собственности" required>
                <input type="text" placeholder="Идентификаторы (ОГРН, ИНН, КПП)">
                <input type="text" placeholder="Вид деятельности доп (ОКВЭД)">
                <input type="text" placeholder="Юридический адрес (адрес и имеется ли договор аренды)">
                <input type="text" placeholder="Дата открытия счета">
                <input type="text" placeholder="Имеется ли банк клиент">
                <input type="text" placeholder="Номер р\с банка">
                <input type="text" placeholder="Количество учредителей">
                <input type="text" placeholder="Генеральный директор (ФИО)">
                <input type="text" placeholder="Уставной капитал (размер и чем сформирован). Оплачен ли?">
                <input type="text" placeholder="Есть ли аудиторская проверка? (да/нет с пояснением)">
                <input type="text" placeholder="Обороты компании (в месяц, в год)">
                <input type="text" placeholder="Сдача отчетности (нужно-не нужно)">
            </div>
            <section class="sell__form__send">
                <button class="button" type="send">Отправить</button>
            </section>
        </form>
    </div>
</section>

<section class="feedback">
    <?php include "blocks/feedback.php"; ?>
</section>
<?php include "blocks/services.php"; ?>
<footer>
    <?php include "blocks/footer.php"; ?>
</footer>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
