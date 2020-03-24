<?php


class formulaire
{
    function __construct($meth, $url){
        echo "<form method='".$meth."' action='".$url."'>";
    }
    public function ajouterzonetexte($text, $name){
        echo $text."<input type=\"text\" name=\"$name\" /><br /><br />";
    }
    public function ajouterbouton(){
        echo "<input type=\"submit\" value=\"Valider\" /><br /><br />";
    }
    public function getform() {
        echo "</form>";
    }
}
?>