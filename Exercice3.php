<?php

include ('Exercice3Class.php');

echo "
<form action=\"\" method=\"post\">
Nom <input type=\"text\" name=\"nomEx3\" > <br /><br />
Prenom <input type=\"text\" name=\"prenomEx3\" > <br /><br />
Mail <input type=\"text\" name=\"mailEx3\" <br /><br />
<br />
Monsieur : <input type=\"radio\" name=\"sexeEx3\" value=\"Monsieur\" />
Madame : <input type=\"radio\" name=\"sexeEx3\" value=\"Madame\" /> <br />
<br />
   Age : <select name=\"valueAge\" id=\"ageSelected\">
    <option value=\"\">--Age--</option>
    <option value=\"0-20\">0-20</option>
    <option value=\"20-40\">24-40</option>
    <option value=\"41-60\">41-60</option>
    <option value=\"60+\">60 et +</option>
</select> <br /><br />
<input type=\"submit\" value=\"Submit\" /><br /><br />
</form>
<br>
";

$form = new Exercice3Class();
if (isset($_POST['nomEx3']) && isset($_POST['prenomEx3']) && isset($_POST['sexeEx3']) && isset($_POST['valueAge'])  ) {
    $form->setNom();
    $form->setPrenom();
    $form->setAge();
    $form->setMail();
    $form->setSexe();
    $form->display();
}