<?php


class formulaire
{
    function __construct($meth, $url){
        echo "<form method='".$meth."' action='".$url."'>";
    }
    public function ajouterzonetexte($text, $name){
        echo "<label for='".$text."'></label><input type=\"text\" name=\"$name\" />";
    }
    public function ajouterbouton(){
        echo "<input type=\"submit\" value=\"Valider\" />";
    }
    public function getform() {
        echo "</form>";
    }
}

?>