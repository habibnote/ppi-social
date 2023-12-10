<?php
/**
 * Template Name: Profile page
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

    <!-- <header class="header-warpper">
        <div class="habib-container">
            <div class="logo-area">
                <a href="#">
                    Hello
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">home</a></li>
                    <li><a href="#">home</a></li>
                </ul>
            </div>
        </div>
    </header> -->

    <main>
        <div class="habib-profile-wrapper">
            <div class="habib-container">
                <div class="habib-profile-cover">
                    <img src="<?php echo get_template_directory_uri() . "/assets/img/cover.avif" ?>" alt="">
                </div>
                <div class="habib-profile-content-area">
                    <div class="habib-profile-left">
                        <div class="profile-pic">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/login.png' ?>" alt="">
                        </div>
                        <div class="all-user-meta">
                            <h3>Md. Habibur Rahman</h3>
                            <h5>Bio</h5>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quasi magnam veritatis non magni aliquid vero alias, rerum nobis ducimus.</span>
                            <p>Birthday: 20/12/2023</p>
                            <p>Phone : 01877666010</p>
                            <p><a href="#">Profile Setting</a></p>
                            <button> Logout </button>
                        </div>
                    </div>
                    <div class="habib-profile-right">
                        <div class="title-area">
                            <h1>My posts</h1>
                            <p><button>Add new Post</button></p>
                        </div>
                        <div class="user-content-area">
                            <div class="single-content-wrap">
                                <div class="author-info">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/login.png' ?>" alt="">
                                    <h6>Md. Habibur Rahman</h6>
                                </div>
                                <div class="habib-user-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus corrupti ratione vero accusamus at modi? Dolorum quo natus facilis veritatis.</p>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/login.png' ?>" alt="">
                                </div>
                            </div>
                            <div class="single-content-wrap">
                                <div class="author-info">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/login.png' ?>" alt="">
                                    <h6>Md. Habibur Rahman</h6>
                                </div>
                                <div class="habib-user-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus corrupti ratione vero accusamus at modi? Dolorum quo natus facilis veritatis.</p>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/login.png' ?>" alt="">
                                </div>
                            </div>
                            <div class="single-content-wrap">
                                <div class="author-info">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/login.png' ?>" alt="">
                                    <h6>Md. Habibur Rahman</h6>
                                </div>
                                <div class="habib-user-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus corrupti ratione vero accusamus at modi? Dolorum quo natus facilis veritatis.</p>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/login.png' ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms & condition</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>
        <p>PPI@Social - 2023-2023</p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>

