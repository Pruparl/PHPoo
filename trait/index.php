<?php
require_once 'autoload.php';

$member = new Member();

// appel de la péthode venant du trait StringUtilis
echo $member->asParagraph('Bonjour', 'green');

$member->setFirstname('Julien');
$member->displayFirstname('blue');

