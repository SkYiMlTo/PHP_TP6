<?php


class football
{
    private $name;
    private $nbOfTitles;
    const NBEQUIPES = "Nombre d'équipe : ";

    static $nbEquipes = 0;

    static function displayNbEquipes()
    {
        echo self::NBEQUIPES.self::$nbEquipes."<br />";
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
        self::$nbEquipes++;
        $this->name = $name;
        $this->nbOfTitles = $nbOfTitles;
    }

    function __destruct()
    {
        self::$nbEquipes--;
        echo "Destructor\n";
    }

}

$equipe = new football("Name1", 1);
$equipe2 = new football("Name2", 2);
$equipe3 = new football("Name3", 3);
$equipe4 = new football("Name4", 4);
$equipe->display();
$equipe::displayNbEquipes();