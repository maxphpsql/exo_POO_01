
<?php
class Fruit {
    // propriétés
    public $nom;

  //constructeur
    function __construct ($nom){
        $this->nom = $nom;
    }

    // Methodes
function get_nom(){
    return $this->nom;
}
}

$orange = new Fruit("orange");
echo $orange->get_nom();
?>

