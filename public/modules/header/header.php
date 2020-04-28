<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" href=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="assets/css/boot.css"/>
    <!--    <link rel="stylesheet" href="assets/css/style.css"/>-->
    <link rel="stylesheet" href="modules/header/header.css"/>
    <link rel="stylesheet" href="modules/social_fixed/social.css"/>
    <link rel="stylesheet" href="modules/services/services.css"/>
    <link rel="stylesheet" href="modules/slides/slides.css"/>
    <link rel="stylesheet" href="modules/footer/footer.css"/>
    <link rel="stylesheet" href="modules/about/about.css"/>
    <link rel="stylesheet" href="modules/posts/posts.css"/>
    <link rel="stylesheet" href="assets/css/mobile.css"/>

    <title><?= $title; ?></title>
</head>
<body>
<header>

    <div class="logo_for_mobile ds-none">
        <img src="images/desktop/logo.png" alt="">
    </div>
    <div class="go_out_in_1170 ds-none">
        <div class="logo_fix">
            <img src="images/desktop/logo.png" alt="">
        </div>
    </div>

    <div class="logo_fix_up ds-none">
        <img src="images/desktop/logo.png" alt="">
    </div>

    <div class="menu">
        <span class="go_out_in_1170">Menu</span>
        <?php
        if (isset($menuColor)) {
            if ($menuColor === "sand") {
                echo "<img src=\"images/desktop/menu.png\" alt=\"\">";
            } else {
                echo "<img src=\"images/desktop/menu_2.png\" alt=\"\">";
            }
        } else {
            echo "<img src=\"images/desktop/menu.png\" alt=\"\">";
        }
        ?>
    </div>

    <nav class="nav ds-none">
        <h1 class="ds-none">Navegue através do nosso site.</h1>
        <div class="close_menu">X</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Sobre</a></li>
            <li><a href="posts.php">Serviços</a></li>

        </ul>
    </nav>

</header>

