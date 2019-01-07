<?php

require_once dirname(__FILE__).'/PresidentDeLaRepublique.php';

$president = PresidentDeLaRepublique::getInstance('Abdelkarim', 'Mabrouk');

echo $president;

