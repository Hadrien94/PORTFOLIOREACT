<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>PROJET </title>
</head>
<body>
    <header>
        <div class="menu-btn">
            <span class="menu-btn__burger"></span>
        </div>
        <nav class="nav">
            <ul class="menu-nav">
                <li class="menu-nav__item ">
                    <a href="https://webdesign.adoubeweb.fr/src/home.php"
                     class="menu-nav__link">
                        HOME
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="https://webdesign.adoubeweb.fr/src/contact.php"
                     class="menu-nav__link">
                        CONTACT/CV
                    </a>
                </li>
                <li class="menu-nav__item active">
                    <a href="https://webdesign.adoubeweb.fr/src/about.php" 
                    class="menu-nav__link">
                       PORTFOLIO
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        include './grid.php'
        ?>
    
    </main>
    <script src="https://kit.fontawesome.com/48c872fd36.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>