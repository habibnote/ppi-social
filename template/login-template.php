<?php
/**
 * Template Name: Login Page
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
        <div class="habib-login-register-page-wrapper">
            <div class="habib-container habib-login-register">
                <div class="habib-login-left">
                    <h2>PPI Social</h2>
                    <p>Welcome back !!!</p>
                    <h1>Log In</h1>
                    <div class="habib-row">
                        <label for="habib-email">Email</label>
                        <input type="text" placeholder="Email" id="habib-email">
                    </div>
                    <div class="habib-row">
                        <label for="habib-password">Password</label>
                        <input type="Email" placeholder="Password" id="habib-password">
                    </div>
                    <div class="habib-row">
                        <p>
                            <button type="button">Login <span class="dashicons dashicons-arrow-right-alt"></span></button>
                        </p>
                    </div>
                    <label>Don't have an account yet? <a href="#">Sign up for free</a></label>
                </div>
                <div class="habib-login-right">
                    <img class="habib-login-main-image" src="<?php echo get_template_directory_uri() . "/assets/img/login.png" ?>" alt="">
                </div>
            </div>
        </div>
    </main>

    <!-- <footer>
        <p>This is our footer</p>
    </footer> -->
    <?php wp_footer(); ?>
</body>
</html>

