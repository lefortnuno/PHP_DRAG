<?php

    $serveur = "localhost";
    $nom_bd = "ecole";
    $user = "root";
    $password = "";

    try{
        $connexion = new PDO("mysql:host=$serveur;dbname=$nom_bd", $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete1 = "USE ecole";
        $connexion -> exec($requete1);
        $table_etudiant = "CREATE TABLE IF NOT EXISTS etudiant(
                            matricule int not null auto_increment,
                            nom char(50) not null,
                            prenom char(50) not null,
                            niveau ENUM('L1', 'L2', 'L3', 'M1', 'M2') not null,
                            parcours ENUM('GB','SR','IG') not null,
                            adr_email varchar(50) not null unique,
                            primary key(matricule)
                        )";
        $table_professeur = "CREATE TABLE IF NOT EXISTS professeur(
                            id_prof int not null auto_increment,
                            nom char(50) not null,
                            prenom char(50) not null,
                            civilite ENUM('Monsieur', 'Madame', 'Mademoiselle') not null,
                            grade ENUM('Professeur titulaire',
                                        'Maitre de conference',
                                        'Assistant d enseignement superieur et recherche',
                                        'Docteur HDR',
                                        'Docteur en informatique',
                                        'Doctorant en informatique') not null,
                            primary key(id_prof)
                        )";
        $table_organisme = "CREATE TABLE IF NOT EXISTS organisme(
                            id_org int not null auto_increment,
                            designation char(50) not null,
                            lieu char(50) not null,
                            primary key(id_org)
                            )";
        $table_soutenance = "CREATE TABLE IF NOT EXISTS soutenir(
                            matricule int unique not null,
                            id_org int not null,
                            date_soutenance date not null,
                            note tinyint unsigned,
                            president varchar(100),
                            examinateur varchar(100),
                            rapporteur_int varchar(100),
                            rapporteur_ext varchar(100),
                            primary key(matricule, id_org, date_soutenance),
                            FOREIGN KEY (matricule) REFERENCES etudiant(matricule),
                            FOREIGN KEY (id_org) REFERENCES organisme(id_org)
                            )";                      
        $connexion->exec($table_etudiant);
        $connexion->exec($table_professeur);
        $connexion->exec($table_organisme);
        $connexion->exec($table_soutenance);
    }
    catch(PDOException $e)
    {
        echo "Erreur : " .$e;
    }
?>