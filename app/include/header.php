<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <a href="<?php echo BASE_URL ?>">
                    <h1>My blog</h1>
                </a>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>">Main</a></li>
                    <li><a href="<?php echo BASE_URL . "about.php"?>">About us</a></li>
                    <li><a href="#">Services</a></li>

                    <li>
                        <a href="<?php echo BASE_URL . "auth.php"?>">
                            <i class="fa fa-user"></i>
                            Office
                        </a>
                        <ul>
                            <li><a href="<?php echo BASE_URL . "auth.php"?>">Admin panel</a></li>
                            <li><a href="#">Exit</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>