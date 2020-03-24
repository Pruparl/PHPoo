<?php

use App\Cnx;

require_once 'App/init.php';

// pour avoir une instance unique de PDO
$pdo = Cnx::getInstance();

include 'layout/top.php';
?>
<h1>Accueil</h1>

    <table class="table">
        <tr>
            <th><?= $abonne->getId() ?></th>
            <th><?= $abonne->getPrenom() ?></th>
        </tr>

        <?php
        endforeach;
        ?>

    </table>
<?php
include  'layout/bottom.php';
?>