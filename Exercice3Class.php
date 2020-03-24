<?php


class Exercice3Class
{
    private $firstName;
    private $lastName;
    private $mail;
    private $age;
    private $sexe;

    public function __construct()
    {
      /*$this->firstName = $_POST['nomEx3'];
        $this->lastName = $_POST['prenomEx3'];
        $this->mail = $_POST['mailEx3'];
        $this->age = $_POST['valueAge'];*/
    }

    function setNom(){
        $this->lastName = $_POST['nomEx3'];
    }

    function setPrenom(){
        $this->firstName = $_POST['prenomEx3'];
    }

    function setMail(){
        $this->mail = $_POST['mailEx3'];
    }

    function setAge(){
        $this->age = $_POST['valueAge'];
    }

    function setSexe(){
        $this->sexe = $_POST['sexeEx3'];
    }

    function display(){
        echo "Nom : ".$this->lastName;
        echo '<br>';
        echo "Prénom : ".$this->firstName;
        echo '<br>';
        echo "Email : ".$this->mail;
        echo '<br>';
        echo "Age : ".$this->age;
        echo '<br>';
        echo "Sexe : ".$this->sexe;
    }
}