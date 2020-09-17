<?php
require("./Modele/modele.php");
$base = connexion();


function CtlBlog()
{
    $resultat1 = getAllArticles($GLOBALS['base']);
    $resultat2 = getFirstArticles($GLOBALS['base']);

    require("./Vue/blog.php");
}

function CtlAccueil()
{
    $resultat = getFirstArticles($GLOBALS['base']);
    require("./Vue/accueil.php");
}

function CtlArticle($Id_billet)
{
    $Id_billet = intval($Id_billet);
    $resultat = getArticle($Id_billet, $GLOBALS['base']);
    $nbcomment = getRowNumber($GLOBALS['base'], $Id_billet);
    $resultat1 = getFirstArticles($GLOBALS['base']);
    $article = $resultat->fetch();
    $commentaires = getFirstComments($Id_billet, $GLOBALS['base']);
    require("./Vue/article.php");
}

function CtlSetComment($auteur, $comment, $Id_billet, $base)
{
    $resultat = setComment($auteur, $comment, $Id_billet, $base);
}

function CtlA_propos()
{
    require("./Vue/a_propos.php");
}

function CtlContact()
{
    require('./Vue/contact.php');
}