SAE 5 Web Angelo Richard

Notre utilisation du PHP sert à syncroniser les importations de HTML et CSS.

Il y a le dossier page qui possède le contenu. Le dossier pages-sub-menus qui contient les ancrages vers les différents titres (balises h2).

Le CSS est partitionné, c'est pas très clair effectivement car Angelo ne fait pas de SCSS.
Je me suis occupé de la responsive générale et pour les deux menus en SCSS.
Angelo a fait le CSS des contenus (je suis repassé dessus pour qu'il soit bien structuré).
Le fichier colors.css contient plusieurs palettes de couleurs facilement interchangeable, je n'ai pas supprimé les autres palettes car le thème avec le vert est très sympa, mais pas hazard le site rendra bien avec les deux autre palettes, je n'ai pas essayé.



Les images sont dans un seul dossier, Angelo a organisé comme ça et le projet ne nécessite pas plus d'images alors cela reste clair, pas besoins d'organiser tout dans des dossiers.



Si tu écris n'importe quoi pour la valeur de la variable page tu tomberas sur un petite page d'erreur, ça sert à rien mais c'est drôle.
index.php?page=error404


Le dossier Elaboration contient les maquettes et les idées que l'on a eu et mise ou non en place.


Le fichier traitement-from.php représente l'endroit où le serveur reçoit les données, la redirection automatique faire retourner sur la première page.