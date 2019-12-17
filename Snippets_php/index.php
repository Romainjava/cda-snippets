<?php
$loc = filter_input(INPUT_GET, "loc");
if (!$loc) {
  $loc = "Accueil";
}

include("components/template.php");
