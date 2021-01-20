<?php

class Form{
            var $fields = array(); # contine numele si marcajele campurilor
            var $processor; # numele programului care proceseaza forma
            var $submit = "Submit Form"; # valoarea butonului de confirmare
            var $Nfields = 0; # numar de campuri adaugate pe forma

        function __construct($processor, $submit){
            $this->processor = $processor;
            $this->submit = $submit;
        }

        function displayForm(){
            echo "<form action='{$this->processor}' method='POST'>";
            echo "<table width='100%'>";

            for($j = 1; $j <= sizeof($this->fields); $j++){
                echo "<tr><td align='right'>{$this->fields[$j-1]['label']}: </td> ";
                echo "<td><input type='text' name='{$this->fields[$j-1]['name']}'></td></tr> ";
            }

            echo "<tr><td colspan=2 align='center'>
                <input type='submit' value='{$this->submit}'></td></tr> ";
            echo "</table>";
        }

        function addField($name, $label){
            $this->fields[$this->Nfields]['name'] = $name;
            $this->fields[$this->Nfields]['label'] = $label;
            $this->Nfields = $this->Nfields + 1;
        }
    }
?>