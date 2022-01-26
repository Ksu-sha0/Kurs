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
<!-- Header end -->


<main class="main">
<!--     Intro start -->
    <section id="main">
        <h1 class="title"> ОТЕЛИ МОСКВЫ ПРИВЕТСТВУЮТ ВАС!</h1>
        <h2 class="title2">
            Основано на информации с сайта открытых данных Москвы
        </h2>
        <div class="img">
            <img class="imghotel" src="../img/hotel.png" alt="hotel">
        </div>
    </section>

    <div>
        <button class="btn"><a class="link" href="about.php" >УЗНАЙТЕ О НАС </a>
        </button>
     </div>

    <div class="form" id="contacts">
        <div class="container-form">
            <h2>ЕСТЬ ПРОБЛЕМЫ С РАБОТОЙ САЙТА?</h2>
            <div class="form-text">НАПИШИТЕ НАМ!</div>

            <form action="#" id="form" class="form__body">
                <div class="form-left">
                    <label class="lab">
                        Имя*:<input type="text" class="_req input" name="name">
                    </label>

                    <label class="lab">
                        Телефон:<input type="text" name="tel" class="input">
                    </label>

                    <label class="lab">
                        E-mail*:<input type="text" class="_req _email input" name="email">
                    </label>
                </div>

                <div class="form-right">
                    <label class="comment lab">
                        Комментарий:
                        <textarea name="message"></textarea>
                    </label>
                </div>

                <div class="form-btn">
                    <button type="submit">
                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M18 4.70312C17.6987 5.0346 17.3571 5.32589 16.9955 5.57701C15.3181 6.71205 13.6306 7.85714 11.9933 9.04241C11.1496 9.66518 10.1049 10.4286 9.01005 10.4286H9H8.98996C7.89509 10.4286 6.85045 9.66518 6.0067 9.04241C4.36942 7.8471 2.68192 6.71205 1.01451 5.57701C0.642857 5.32589 0.301339 5.0346 0 4.70312V12.6786C0 13.5625 0.723214 14.2857 1.60714 14.2857H16.3929C17.2768 14.2857 18 13.5625 18 12.6786V4.70312ZM18 1.75C18 0.866071 17.2667 0.142857 16.3929 0.142857H1.60714C0.532366 0.142857 0 0.986607 0 1.97098C0 2.88504 1.01451 4.02009 1.72768 4.50223C3.2846 5.58705 4.86161 6.67187 6.41853 7.76674C7.07143 8.21875 8.17634 9.14286 8.98996 9.14286H9H9.01005C9.82366 9.14286 10.9286 8.21875 11.5815 7.76674C13.1384 6.67187 14.7154 5.58705 16.2824 4.50223C17.1663 3.88951 18 2.875 18 1.75Z"
                                    fill="black" />
                        </svg>
                        Отправить</button>
                </div>
            </form>
        </div>
    </div>

</main>
<!-- Footer start-->
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
