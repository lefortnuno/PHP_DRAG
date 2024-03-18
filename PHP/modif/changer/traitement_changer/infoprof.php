<?php
    $d_prenom_president = "SELECT * FROM professeur WHERE prenom = (SELECT president FROM soutenir WHERE matricule = :matricule)";
    $d_prenom_president_p = $connexion->prepare($d_prenom_president);
    $d_prenom_president_p->bindParam(':matricule', $matricule);
    $d_prenom_president_p->execute();

    $rr_prenom_president = $d_prenom_president_p->fetch(PDO::FETCH_ASSOC);

    
    /*Valeur de president */$nom_president = $rr_prenom_president['nom'];
                                   $civilite_president = $rr_prenom_president['civilite'];
                                   $grade_president = $rr_prenom_president['grade'];

    $d_prenom_examinateur = "SELECT * FROM professeur WHERE prenom = (SELECT examinateur FROM soutenir WHERE matricule = :matricule)";
    $d_prenom_examinateur_p = $connexion->prepare($d_prenom_examinateur);
    $d_prenom_examinateur_p->bindParam(':matricule', $matricule);
    $d_prenom_examinateur_p->execute();

                                    $rr_prenom_examinateur = $d_prenom_examinateur_p->fetch(PDO::FETCH_ASSOC);
                                    $nom_president = $rr_prenom_president['nom'];
                                    $civilite_president = $rr_prenom_president['civilite'];
                                    $grade_president = $rr_prenom_president['grade'];
    echo "<br>";


    /*Valeur de examinateur*/   $nom_examinateur = $rr_prenom_examinateur['nom'];
                                $civilite_examinateur = $rr_prenom_examinateur['civilite'];
                                $grade_examinateur = $rr_prenom_examinateur['grade'];

                                $d_prenom_Rapporteur_int = "SELECT * FROM professeur WHERE prenom = (SELECT president FROM soutenir WHERE matricule = :matricule)";
                                $d_prenom_Rapporteur_int_p = $connexion->prepare($d_prenom_Rapporteur_int);
                                $d_prenom_Rapporteur_int_p->bindParam(':matricule', $matricule);
                                $d_prenom_Rapporteur_int_p->execute();
                                
                                $rr_prenom_Rapporteur_int = $d_prenom_Rapporteur_int_p->fetch(PDO::FETCH_ASSOC);


    /*Valeur de nprenomom rapp_int*/$nom_Rapporteur_int = $rr_prenom_Rapporteur_int['nom'];
                                    $civilite_Rapporteur_int = $rr_prenom_Rapporteur_int['civilite'];
                                    $grade_Rapporteur_int = $rr_prenom_Rapporteur_int['grade'];
?>