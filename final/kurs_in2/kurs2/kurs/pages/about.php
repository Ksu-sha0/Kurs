<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Скворцова К.И.</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/media.css">
    <link rel="stylesheet" href="../ui/jquery-ui.css">
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
        <img class="line" src="../img/line.png" alt="line">
    </div>
    <nav class="header_nav" id="menu">
        <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg">
            <path
                    d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/>
        </svg>
        <a data-goto="#main" class="str" href="main.php">ГЛАВНАЯ</a>
        <a data-goto="#about" class="str" href="about.php">О НАС</a>
        <a data-goto="#service" class="str" href="service.php">СЕРВИС</a>
        <a data-goto="#map" class="str" href="map.php">ПОИСК</a>
    </nav>
</header>

<main class="main2">
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
</main>

<div>
        <button class="btn"><a class="link" href="service.php" >КАК МЫ РАБОТАЕМ?</a>
        </button>
     </div>

<section class="footer">
    <p class="f_title">2021 by Ksu)</p>
</section>
<script src="../js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../ui/jquery-ui.js"></script>

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
