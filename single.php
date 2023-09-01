<?php include("path.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6a18a62d7f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet"/>
    <link rel="stylesheet" href="assest/css/style.css"/>
</head>
<body>
<?php include("app/include/header.php"); ?>


<!-- Block main -->
<div class="container">
    <div class="content row">
        <!-- Main content -->
        <div class="main-content col-md-9 col-12">
            <h2>Title</h2>

            <!--1 post -->
            <div class="single_post row">
                <div class="img col-12">
                    <img src="assest/images/1post.png" alt="" class="img-thumbnail"/>
                </div>
                <div class="info">
                    <i class="far fa-user"> Name author </i>
                    <i class="far fa-calendar"> Mar 11, 2019 </i>
                </div>
                <div class="single_post_text col-12">
                    <br/>
                    <h4>Спецификация</h4>
                    <a href="https://www.ecma-international.org/publications-and-standards/standards/ecma-262/">
                        Спецификация ECMA-262
                    </a>
                    содержит самую глубокую, детальную и формализованную информацию о JavaScript.
                    Она определяет сам язык.
                    <br/> <br/>
                    Вначале спецификация может показаться тяжеловатой для понимания из-за слишком формального стиля
                    изложения.
                    Если вы ищете источник самой достоверной информации, то это правильное место, но она не для
                    ежедневного использования.
                    <br/> <br/>
                    Новая версия спецификации появляется каждый год. А пока она не вышла официально, все желающие могут
                    ознакомиться с текущим черновиком на https://tc39.es/ecma262/.
                    <br/> <br/>
                    Чтобы почитать о самых последних возможностях, включая те, которые «почти в стандарте» (так
                    называемые «stage 3 proposals»), посетите https://github.com/tc39/proposals.
                    <br/> <br/>
                    Если вы разрабатываете под браузеры, то существуют и другие спецификации, о которых рассказывается
                    во второй части этого учебника.

                    <br/> <br/> <br/>
                    <h4>Справочники</h4>
                    MDN (Mozilla) JavaScript Reference – это справочник с примерами и другой информацией. Хороший
                    источник для получения подробных сведений о функциях языка, методах встроенных объектов и так далее.
                    <br/> <br/>
                    Располагается по адресу https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference.
                    <br/> <br/>
                    Хотя зачастую вместо их сайта удобнее использовать какой-нибудь интернет-поисковик, вводя там запрос
                    «MDN [что вы хотите найти]», например https://google.com/search?q=MDN+parseInt для поиска информации
                    о функции parseInt.
                </div>
            </div>
        </div>


        <!-- Sidebar content -->
        <div class="sidebar col-md-3">

            <div class="section search">
                <h3>Search</h3>
                <form action="index.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Want find...">
                </form>
            </div>

            <div class="section topic">
                <h3>Topics</h3>
                <ul>
                    <li><a href="#"> Poems </a></li>
                    <li><a href="#"> Quotes </a></li>
                    <li><a href="#"> Fiction </a></li>
                    <li><a href="#"> Biography </a></li>
                    <li><a href="#"> Motivation </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include("app/include/footer.php"); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>