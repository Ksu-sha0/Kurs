<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Скворцова К.И.</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/media.css">
    <link rel="stylesheet" href="ui/jquery-ui.css">
</head>
<body>
<!-- Header start -->
<header>
    <div class="block_header">
        <div class="title_header">ОТЕЛИ МОСКВЫ</div>
        <div id="burger">
            <svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                        d="m464.883 64.267h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/>
                <path
                        d="m464.883 208.867h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/>
                <path
                        d="m464.883 353.467h-417.766c-25.98 0-47.117 21.137-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.012-21.137-47.149-47.117-47.149z"/>
            </svg>
        </div>
    </div>
    <div class="block_line">
        <img class="line" src="./img/line.png" alt="line">
    </div>
    <nav class="header_nav" id="menu">
        <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg">
            <path
                    d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/>
        </svg>
        <a data-goto="#main" class="str" href="#main">ГЛАВНАЯ</a>
        <a data-goto="#about" class="str" href="#about">О НАС</a>
        <a data-goto="#service" class="str" href="#service">СЕРВИС</a>
        <a data-goto="#map" class="str" href="#map">КАРТА</a>
    </nav>
</header>
<!-- Header end -->


<main class="main">
<!--     Intro start -->
    <section id="main">
        <h1 class="title"> ОТЕЛИ МОСКВЫ ПРИВЕТСТВУЮТ ВАС!</h1>
        <h2 class="title2">
            Основано на информации с сайта открытых данных Москвы
        </h2>
        <div class="img">
            <img class="imghotel" src="./img/hotel.png" alt="hotel">
        </div>
    </section>

<!--         Section "Table" styles start -->

    <section class="table_wrap">
        <section id="about">
            <div class="table_card1">О НАС</div>
        </section>
        <div class="table_card2">
            Мы предоставляем информацию с банка открытых данных Москвы. Наш вебсайт показывает информацию о названии,
            адресе, почте и сайте нужной вам гостиницы. Вы можете посмотреть на карту и выбрать наиболее подходящее для
            вас расположение.
            Наслаждайтесь своим пребыванием в Москве!
        </div>
    </section>
<!--     Section "Table" styles end -->

    <section id="service">
        <div class="section_name">
            НАШ СЕРВИС
        </div>
        <div class="section2"> Вот, что мы предлагаем:</div>
        <div class="card_blocks">
            <div class="card_block">
                <img class="img_card" src="img/map.png" alt="" width="200px" height="200px">
                <div class="serv1"> ПОСМОТРИТЕ НА КАРТУ</div>
            </div>
            <div class="card_block">
                <img class="img_card" src="img/hotel2.png" alt="" width="200px" height="200px">
                <div class="serv2"> ВЫБЕРИТЕ ПОДХОДЯЩИЙ ОТЕЛЬ</div>
            </div>
            <div class="card_block">
                <img class="img_card" src="img/what.png" alt="" width="200px" height="200px">
                <div class="serv3"> СПРОСИТЕ НАС, ЧТО МЫ ЗНАЕМ</div>
            </div>
        </div>
    </section>

    <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d143605.6136549469!2d37.481727997891184!3d55.77869036765505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0LPQvtGB0YLQuNC90L3QuNGG0Ysg0JzQvtGB0LrQstCw!5e0!3m2!1sru!2sru!4v1639791514357!5m2!1sru!2sru"
                width="1000" height="400" style="text-align: center" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <div class="ask">
        <p class="search">СПРОСИТЕ НАС</p>
        <form class="form-horizontal" method="post" id="form">
                <div class="search_block">
                    <label class="input_field">
                        Введите название отеля:
                        <input id="search" name="search" class="pole" type="text"  size="20" maxlength="30">
                    </label>
                    <button class="button" type="submit" id="submit" name="submit"> НАЙТИ</button>
                </div>
        </form>

      <?php
      if (!empty($_GET['search'])) {
          $db = mysqli_connect('std-mysql:3306', 'std_1555_kursovaia', 'std_1555_kursovaia', 'std_1555_kursovaia');

          $search = $_GET['search'];
          $query = mysqli_query($db, "SELECT * FROM `0` WHERE `FullName` LIKE '%$search%'");
          $article = mysqli_fetch_assoc($query) ?>

    </div>


    <section id="information">
        <div class="section_name">
            ИНФОРМАЦИЯ
        </div>
        <div class="section2"> Здесь Вы можете посмотреть нужную информацию:</div>
        <div class="choose">Вы выбрали:</div>
        <h2 class="fullname"><?php echo $article['FullName'] ?></h2>
        <div class="information_blocks">
            <div class="information_block">
                <img class="img_card" src="img/adress.png" alt="" width="200px" height="200px">
                <div class="serv1"> АДРЕС</div>
                <p><?php echo $article['Address'] ?></p>
            </div>
            <div class="information_block">
                <img class="img_card" src="img/mail.png" alt="" width="200px" height="200px">
                <div class="serv2"> E-MAIL</div>
                <p><?php echo $article['Email'] ?></p>
            </div>
            <div class="information_block">
                <img class="img_card" src="img/website.png" alt="" width="200px" height="200px">
                <div class="serv3"> САЙТ</div>
                <?php
                if ($article['WebSite'] === '') {
                ?><p>Сайта нет</p>
                <?php
                } else {
                ?><a href="https://<?php echo $article['WebSite'] ?>" target="_blank"><?php echo $article['WebSite'] ?></a>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <?php } ?>
</main>
<!-- Footer start-->
<section class="footer">
    <p class="f_title">2021 by Ksu)</p>
</section>
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="ui/jquery-ui.js"></script>

<script>
    $(function(){

        $("#search").autocomplete({
            source: 'search.php',
            minLength: 1,
            select: function( event, ui ){
                window.location = 'test_kurs.php?search=' + encodeURIComponent(ui.item.value) + '#information';
            }
        });

    });
</script>

<script type="text/javascript">
    $(function () {
        $("a[href^='#']").click(function () {
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top + "px"});
            return false;
        });
    });
</script>
</body>
</html>
