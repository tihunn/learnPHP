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


<!-- Carousel-->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Top post</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assest/images/1.jpg" class="d-block w-100 imgSize" alt="..."/>
                <div class="carousel-caption d-none d-md-block carousel-caption-hack">
                    <h5><a href="#"> First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assest/images/2.jpg" class="d-block w-100 imgSize" alt="..."/>
                <div class="carousel-caption d-none d-md-block carousel-caption-hack">
                    <h5><a href="#"> Second slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assest/images/3.jpg" class="d-block w-100 imgSize" alt="..."/>
                <div class="carousel-caption d-none d-md-block carousel-caption-hack">
                    <h5><a href="#"> Third slide label</a></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<!-- Block main -->
<div class="container">
    <div class="content row">
        <!-- Main content -->
        <div class="main-content col-md-9 col-12">
            <h2>Latest publication</h2>

            <!--1 post -->
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assest/images/1post.png" alt="" class="img-thumbnail"/>
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3><a href="#"> Cool article on the topic of dynamic website</a></h3>
                    <i class="far fa-user"> Name author </i>
                    <i class="far fa-calendar"> Mar 11, 2019 </i>
                    <p class="preview-text">
                        Add .carousel-fade to your carousel to animate slides with a fade transition instead of a slide.
                        Depending on your carousel content (e.g., text only slides),
                        you may want to add .bg-body or some custom CSS to the .carousel-items for proper crossfading.
                    </p>
                </div>
            </div>

            <!--2 post-->
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assest/images/1post.png" alt="" class="img-thumbnail"/>
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3><a href="#"> Cool article on the topic of dynamic website</a></h3>
                    <i class="far fa-user"> Name author </i>
                    <i class="far fa-calendar"> Mar 11, 2019 </i>
                    <p class="preview-text">
                        Add .carousel-fade to your carousel to animate slides with a fade transition instead of a slide.
                        Depending on your carousel content (e.g., text only slides),
                        you may want to add .bg-body or some custom CSS to the .carousel-items for proper crossfading.
                    </p>
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
                    <li><a href="#"> Poems </a> </li>
                    <li><a href="#"> Quotes </a> </li>
                    <li><a href="#"> Fiction </a> </li>
                    <li><a href="#"> Biography </a> </li>
                    <li><a href="#"> Motivation </a> </li>
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