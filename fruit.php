
<?php
class Fruit {
    // propriétés

    public $nom;
    public $couleur;

    // Methodes

function set_nom($nom)
{ 
$this->nom = $nom;
}
function get_nom()
{ 
return $this->nom;
}

function set_couleur($couleur)
{ 
$this->couleur = $couleur ;
}

function get_couleur()
{ 
return $this->couleur ;
}
}

$pomme = new Fruit();
$pomme->set_nom('pomme');
echo $pomme->get_nom() ;
echo'<br>';
$kiwi = new Fruit();
$kiwi->set_nom('kiwi');
echo $kiwi->get_nom() ;
$pomme->set_couleur('rouge');
echo'<br>';
echo $pomme->get_couleur() ;

?>

