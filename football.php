<?php


class football
{
    private $name;
    private $nbOfTitles;
    const NBEQUIPES = "Nombre d'équipe";

    static $nbEquipes = 0;

    static function displayNbEquipes()
    {
        echo self::NBEQUIPES;
    }

    function display()
    {
        echo "L'équipe ".$this->name." possède ".$this->nbOfTitles." titres<br />";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNbOfTitles()
    {
        return $this->nbOfTitles;
    }

    public function setNbOfTitles($nbOfTitles)
    {
        $this->nbOfTitles = $nbOfTitles;
    }

    function __construct($name, $nbOfTitles)
    {
        $this->name = $name;
        $this->nbOfTitles = $nbOfTitles;
    }

    function __destruct()
    {
        echo "Destructor\n";
    }

}

$equipe = new football("Nantes", 45);
$equipe->display();