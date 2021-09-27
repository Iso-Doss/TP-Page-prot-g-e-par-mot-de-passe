<?php

if(isset($_POST) && !empty($_POST))
{
    if( isset($_POST["mot-de-passe"]) && !empty($_POST["mot-de-passe"]) && "kangourou" == $_POST["mot-de-passe"] )
    {
        header("location: code-secret.php");    
    }
    else
    {
        header("location: index.php?erreur=Oups!! Le mot de passe est incorrect");    
    }
}else{
    header("location: index.php");
}