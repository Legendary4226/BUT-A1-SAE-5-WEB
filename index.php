<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUT Informatique Lyon1</title>
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="sass/index.css">
    <link rel="stylesheet" href="sass/error404.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <main>
        <!-- Menu de gauche pour naviguer sur le contenu -->
        


        <!-- Importation du contenu -->
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


        <!-- Menu fixe pour naviguer entre pages -->
        


        <!-- Importation du FOOTER -->
        <?php
        include("pages/footer.html");
        ?>
    </main>
</body>

</html>