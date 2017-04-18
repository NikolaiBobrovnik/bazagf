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
    <p>Продать</p>
    <div class="page-title__right-img"></div>
</section>

<section class="sell">
    <div class="container">
        <div class="sell__header"><span><h2>Анкета на размещение компании в базе готовых фирм</h2>
        <p>Уважаемые посетители!<br>Заполняйте анкету согласно примерам и вносите максимально полную информацию о продаваемой компании.</p></span></div>
        <form action="send.php" class="sell__form">
            <div class="sell__form__tab-nav">
                <button class="open-required-col">Главная информация</button>
                <button class="open-no-required-col no-active">Второстепернная информация</button>
            </div>
            <div class="sell__form__col sell__form__col__required">
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Ваше имя" required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="tel" placeholder="Номер телефона" required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="email" placeholder="E-mail" required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Сокращенное наименование организации" required></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Вид деятельности основной (ОКВЭД)" required></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="ИФНС" required></div>
                <div><span></span><input type="text" placeholder="В каком банке открыт счет" required></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Наличие лицензий, разрешений, кассового аппарата и др." required></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Система налогообложения" required></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Имеются ли обороты у компании, на сегодняшний день" required></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Баланс" required></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Желаемая сумма продажи" required></div>
            </div>
            <div class="sell__form__col sell__form__col__required">
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Полное наименование организации" required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Дата регистрации компании (год создания)"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Форма собственности" required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Идентификаторы (ОГРН, ИНН, КПП)"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Вид деятельности доп (ОКВЭД)"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Юридический адрес (адрес и имеется ли договор аренды)"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Дата открытия счета"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Имеется ли банк клиент"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Номер р\с банка"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Количество учредителей"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Генеральный директор (ФИО)"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Уставной капитал (размер и чем сформирован). Оплачен ли?"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Есть ли аудиторская проверка? (да/нет с пояснением)"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Обороты компании (в месяц, в год)"required><br></div>
                <div><span title="Обязательное поле для заполнения"></span><input type="text" placeholder="Имеется ли задолженность по отчетности?"required><br></div>
            </div>
            <section class="sell__form__send">
                <button class="button" type="send">Добавить заявку</button>
            </section>
        </form>
    </div>
</section>
<?php include "blocks/feedback.php"; ?>
<?php include "blocks/services.php"; ?>
<?php include "blocks/footer.php"; ?>
<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
<!--
<script>
    $(document).ready(function(){
        $(".open-required-col").on("click", function(){
            $(".sell__form__col__no-required").css("display","none");
            $(".sell__form__col__required").css("display","block");
            $(".open-no-required-col").addClass( "no-active" );
        });
        $(".open-no-required-col").on("click", function(){
            $(".sell__form__col__required").css("display","none");
            $(".sell__form__col__no-required").css("display","block");
            $(".open-no-required-col").addClass( "no-active" );
        });
    });
</script>
-->
</body>
</html>
