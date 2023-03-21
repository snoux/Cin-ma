<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//Instanciation des Réalisateurs//
$Coen = new Realisateur("Coen", "Joel", "Homme", "29-11-1954");
$Scorsese = new Realisateur("Scorsese", "Martin", "Homme", "17-11-1942");
$Bigelow = new Realisateur("Bigelow", "Kathryn", "Femme", "27-11-1951");
$Tarantino = new Realisateur("Tarantino", "Quentin", "Homme", "27-03-1963");
$Campbell = new Realisateur("Campbell", "Martin", "Homme", "24-10-1943");
$Nolan = new Realisateur("Nolan", "Christopher","Homme", "30-07-1970");
$Ritchie = new Realisateur("Ritchie", "Guy", "Homme", "10-09-1968");


//Instanciation des Films//
$TheBigLebowski = new Film("The Big Lebowski", "22-04-1998", 117, $Coen);
$LeLoup = new Film("Le Loup de Wall Street", "25-12-2013", 179, $Scorsese);
$Demineurs = new Film("Démineurs", "23-09-2009", 131, $Bigelow);
$PulpFiction = new Film("Pulp Fiction", "26-10-1994", 164, $Tarantino);
$KillBill = new Film("Kill Bill: Volume 1", "26-11-2003", 111, $Tarantino);
$InglouriousBasterds = new Film("Inglourious Basterds", "19-08-2009", 159, $Tarantino);
$TheDarkKnight = new Film("The Dark Knight", "13-08-2008", 152, $Nolan);
$CasinoRoyale = new Film("Casino Royale", "22-11-2006", 144, $Campbell);
$SherlockHolmes = new Film("Sherlock Holmes", "03-02-2010", 128, $Ritchie);

//Instanciation des rôles//
$jamesbond = new Role("James Bond");
$batman = new Role("Batman");
$sherlock = new Role("Sherlock Holmes");

//Instanciation des Acteurs//
$Connery = new Acteur("Connery", "Sean", "Homme", "25-08-1930", $jamesbond);
$Lazenby = new Acteur("Lazenby", "George", "Homme", "05-09-1939", $jamesbond);
$Moore = new Acteur("Moore", "Roger", "Homme", "14-10-1927", $jamesbond);
$Dalton = new Acteur("Dalton", "Timothy", "Homme", "21-03-1946", $jamesbond);
$Brosnan = new Acteur("Brosnan", "Pierce", "Homme", "16-05-1953", $jamesbond);
$Craig = new Acteur("Craig", "Daniel", "Homme", "02-03-1968", $jamesbond);
$West = new Acteur("West", "Adam", "Homme", "19-09-1928", $batman);
$Keaton = new Acteur("Keaton", "Michael", "Homme", "05-09-1951", $batman);
$Kilmer = new Acteur("Kilmer", "Val", "Homme", "31-12-1959", $batman);
$Clooney = new Acteur("Clooney", "George", "Homme", "06-05-1961", $batman);
$Bale = new Acteur("Bale", "Christian", "Homme", "30-01-1974", $batman);
$Affleck = new Acteur("Affleck", "Ben", "Homme", "15-08-1972", $batman);
$Rathbone = new Acteur("Rathbone", "Basil", "Homme", "13-06-1892", $sherlock);
$Cushing = new Acteur("Cushing", "Peter", "Homme", "26-05-1913", $sherlock);
$Brett = new Acteur("Brett", "Jeremy", "Homme", "03-11-1933", $sherlock);
$DowneyJr = new Acteur("Downey Jr.", "Robert", "Homme", "04-04-1965", $sherlock);
$McKellen = new Acteur("McKellen", "Ian", "Homme", "25-05-1939", $sherlock);

//Affichage//

// echo $batman->ActeurRole();
echo $West->getRole();
