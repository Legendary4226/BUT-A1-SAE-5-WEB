<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUT Informatique Lyon1</title>
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="sass/index.css">
    <link rel="stylesheet" href="sass/responsive.css">
    <link rel="stylesheet" href="sass/responsive-menu.css">
    <link rel="stylesheet" href="sass/responsive-sub-left-menu.css">
    <link rel="stylesheet" href="css/footer.css">

    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'index':
                echo '<link rel="stylesheet" href="css/contenu1.css">';
                break;
            case 'arround':
                echo '<link rel="stylesheet" href="css/contenu2.css">';
                break;
            case 'but':
                echo '<link rel="stylesheet" href="css/contenu3.css">';
                break;
            case 'question-form':
                echo '<link rel="stylesheet" href="css/formulaire.css">';
                break;
            default:
                echo '<link rel="stylesheet" href="sass/error404.css">';
        }
    } else {
        echo '<link rel="stylesheet" href="css/contenu1.css">';
    }
    ?>

    <script src="js/top-menu.js"></script>
</head>
<body>

    <!-- Menu fixe pour naviguer entre pages -->
    <nav class="top-menu">

        <div onClick="toggle_top_menu()" id="cube-3D" class="menu-cube hover-animation">
            
            <div class="front">
                <p>Menu</p>
            </div>
            

            <div class="back"></div>
            <div class="left"></div>
            <div class="right"></div>
            <div class="top"></div>
            <div class="bottom"></div>
        </div>

        <ul>
            <li>
                <a href="?page=index">But en général</a> 
            </li>
            <li>
                <a href="?page=arround">Autour de l'IUT</a>
            </li>
            <li>
                <a href="?page=but">Le BUT Informatique</a>
            </li>
            <li>
                <a href="?page=question-form">Formulaire</a>
            </li>
            <li>
                <button onclick="toggle_top_menu()">
                    <p>Fermer</p>
                </button>
            </li>
        </ul>
    </nav>

    <main>
        <!-- Menu de gauche pour naviguer sur le contenu -->
        <nav class="sub-left-menu">
            <h1>Navigation</h1>

            <?php
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'index':
                        include("pages-sub-menus/sub1.html");
                        break;
                    case 'arround':
                        include("pages-sub-menus/sub2.html");
                        break;
                    case 'but':
                        include("pages-sub-menus/sub3.html");
                        break;
                    case 'question-form':
                        //include("pages-sub-menus/");
                        break;
                }
            } else {
                include("pages-sub-menus/sub1.html");
            }
            ?>

            <button id="open-close-sub-left-menu" onclick="phone_tablet_left_menu()"></button>
        </nav>


        <!-- Importation du contenu -->
        <section class="content">
            <?php
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'index':
                        include("pages/contenu1.html");
                        break;
                    case 'arround':
                        include("pages/contenu2.html");
                        break;
                    case 'but':
                        include("pages/contenu3.html");
                        break;
                    case 'question-form':
                        include("pages/formulaire.html");
                        break;
                    default:
                        include("pages/error404.html");
                }
            } else {
                include("pages/contenu1.html");
            }
            ?>
        </section>

        <!-- Importation du FOOTER -->
        <?php
        include("pages/footer.html");
        ?>
    </main>
</body>
</html>