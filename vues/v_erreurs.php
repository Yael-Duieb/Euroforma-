<?php
/**
 * Vue Erreurs
 *
 * PHP Version 7
 *
 * @category  Stage 2e année
 * @package   Euroforma
 * @author    Yael Haya Duieb
 */
?>
<div class="alert alert-danger" role="alert">
    <?php
    foreach ($_REQUEST['erreurs'] as $erreur) {
        echo '<p>' . htmlspecialchars($erreur) . '</p>';
    }
    ?>
</div>