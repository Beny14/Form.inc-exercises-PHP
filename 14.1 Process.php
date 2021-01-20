<?php
    require_once("form.inc.php");

    echo "<html><head><title>Agenda telefonica</title></head><body>";

        $phone_form = new Form("process.php", "Memoreaza numar");
        $phone_form->addField("first_name", "Prenumele");
        $phone_form->addField("last_name", "Numele");
        $phone_form->addField("phone", "Telefon");

    echo "<h3>Completati urmatorul formular:</h3>";

        $phone_form->displayForm();
    
    echo "</body></html>";
?>