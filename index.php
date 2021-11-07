<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUT Informatique Lyon1</title>
    <link rel="stylesheet" href="css/colors.css">
</head>
<body>
    <main>
        <!-- Importation du menu de gauche pour naviguer sur le contenu -->
        <?php
        
        ?>


        <!-- Importation du contenu -->
        <?php
        if (isset($GET["page"])) {

        } else {
            include("contenu1.html");
        }
        ?>


        <!-- Menu fixe pour naviguer entre pages -->
        


        <!-- Importation du FOOTER -->
        <?php
        include("footer.html");
        ?>
    </main>
</body>
</html>