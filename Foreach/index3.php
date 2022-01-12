<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
    array(
    'nom' => 'Alita: Battle Angel',
        'date' => 2019,
        'realisateur' => 'Robert Rodriguez',
        'acteurs' => 'Keanu Reeves', 'Laurence Fishburne', 'Carrie-Anne Moss', 'Hugo Weaving', 'Joe Pantoliano',
        'synopsis' => "reprendre l'œuvre éponyme Gunn's"
    ),
    array(
        'nom' => 'Avatar',
        'date' => 2009,
        'realisateur' => 'James Cameron',
        'acteurs' => 'Sam Worthington', 'Zoe Saldana',
        'synopsis' => "Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est 
        resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la
         Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre
          la crise énergétique sur Terre. Parce que l'atmosphère de Pandora est toxique pour les humains, ceux-ci ont
           créé le Programme Avatar, qui permet à des  pilotes  humains de lier leur esprit à un avatar, un corps
            biologique commandé à distance, capable de survivre dans cette atmosphère létale. Ces avatars sont des 
            hybrides créés génétiquement en croisant l'ADN humain avec celui des Na'vi, les autochtones de Pandora."
    ),

    array(
        'nom' => 'Titanic',
        'date' => 1997,
        'realisateur' => 'James Cameron',
        'acteurs' => 'Leonardo DiCaprio', 'Kate Winslet ',
        'synopsis' => "En septembre 1996, Brock Lovett est le coordinateur d'une équipe qui fouille méticuleusement
         l'épave du célèbre Titanic, paquebot géant réputé insubmersible qui connut pourtant un destin tragique. 
         Lovett espère mettre la main sur le Cœur de l'Océan, un collier de diamants unique à la valeur inestimable, 
         porté par Louis XVI, dont la découverte lui apporterait la gloire (ce bijou, en réalité fictif, est inspiré du
          diamant bleu de la Couronne). Lors de sa sixième plongée en sous-marin, il remonte des profondeurs un 
          coffre-fort dont il espère qu'il contient le précieux objet. Mais il n'y trouve que quelques vieux billets
           de banque et un dessin représentant une jeune femme nue portant le fameux bijou en pendentif."
    ),
);

//mes film


echo '12.Mes films : <br>';
//ajoutez votre code ici

foreach ($videotheque as $value) {
    foreach ($value as $name) {
        echo $name . '<br>';

    }
}
//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici

