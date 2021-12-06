<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'postgres';
    $db_password = 'postgres';
    $db_name     = 'digital_notebook';
    $db_host     = 'localhost';
    $db = pg_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');
    
    // on applique les deux fonctions pg_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = pg_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = pg_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
                nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = pg_query($db,$requete);
        $reponse      = pg_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['username'] = $username;
            header('Location: ../login/admin/index.html.twig');
        }
        else
        {
           header('Location: ../login/index.html.twig?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: ../login/index.html.twig?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
    header('Location: ../login/index.html.twig');
}
pg_close($db); // fermer la connexion
?>