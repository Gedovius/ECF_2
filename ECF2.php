<?php

/**
 * 
 * EXERCICE N°1
 * 
 * Les utilisateurs de l'application "exo1" sont caractérisés par:
 * un identifiant numérique unique, un nom, un prénom, une date de naissance,
 * un mot de passe. 
 * 
 *          a/ Ecrivez ci-dessous, entre les deux balises div sous forme d'une liste html 
 *             tout les attributs (colonnes) nécessaires à l'expression de la table user 
 *             en base de données, ainsi que le type de chacun des attributs.
 *  -------------------------------------------------------------------------------------*/?>
<div id="reponse a">

    <ol id="liste ordonnée des attributs">
        <li>id_user / INTEGER</li>
        <li>first_name / VARCHAR</li>
        <li>name / VARCHAR</li>
        <li>date_of_birth / DATE</li>
        <li>Keypass / VARCHAR</li>
    </ol>


</div>

<?php /**
 *          b/ Codez ci-dessous la classe User correspondante avec 
 *             les accesseurs et les mutateurs de chaque attributs privés.
 *              !!! ATTENTION !!! Ne documentez pas la classe
 *  -------------------------------------------------------------------------------------*/
//Codez sous cette ligne de commentaire sans rajouter de bornes de langage



class User
{
    private $_id;
    private $_name;
    private $_keypass;
    private $_email;
}
public function get_id_User()

{
    return $this->_id_User;
}

?>

/**
 *          c/ Copier-coller la classe provenant de la question b et renommez la User2,
 *             ajouter lui un constructeur qui appelle une méthode hydrate() et codez cette méthode.
 *             Le tableau de données pour l'hydratation est fourni. 
 *             Vous documenterez ensuite cette classe
 *  -------------------------------------------------------------------------------------*/
//Codez sous l'affectation de la variable $attributs sans rajouter de bornes de langage

<?php

class User2
{
    public $attributs;

    function __construct($_attributs)
    {
        $this->attributs;
    }
    {
    function get_attributs()
    }
$attributs = array('1','Coquelourde','Fernand','17/02/1968','ginettedu72');
echo $attributs->get_attributs()
}

?>


/**
 *          d/ instanciez un objet $user2 provenant de votre classe User2
 *  -------------------------------------------------------------------------------------*/
//Codez sous cette ligne de commentaire sans rajouter de bornes de langage








/**
 * 
 * EXERCICE N°2
 * 
 *  Rédigez les requêtes SQL demandées sur la table user dans les méthodes PDO prepare()
 *  ------------------------------------------------------------------------------------- 
 * EXEMPLE :
 * $sql = 'SELECT nom, couleur, calories FROM fruit WHERE calories < :calories AND couleur = :couleur';*/
/* $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':calories' => 150, ':couleur' => 'red'));
    $red = $sth->fetchAll();
    $sth->execute(array(':calories' => 175, ':couleur' => 'yellow'));
    $yellow = $sth->fetchAll(); 
*/
/*
 *          a/ Sélectionner le nom de tous les utilisateurs de la table
 *  -------------------------------------------------------------------------------------*/

 <?php

class User
try
{
$dbh = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2');
$sth = $dbh->prepare('SELECT * FROM user');
$exec = $sth->execute();
$response = $exec->fetchAll();
}
catch

?>



/**
 *          b/ Sélectionner toutes les infos de l'utilisateur d'id 8 de la table
 *  -------------------------------------------------------------------------------------*/


 <?php

$dbh = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2');
$sth = $dbh->prepare('');
$exec = $sth->execute();
$response = $exec->fetchAll();

?>




?>
