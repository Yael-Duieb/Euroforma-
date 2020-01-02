<?php
/**
 * Index du projet Euroforma
 *
 * PHP Version 7
 *
 * @category  Stage 2e année
 * @package   Euroforma
 * @author    Yael Haya Duieb
 */

require_once 'includes/fct.inc.php';
require_once 'includes/class.pdoeuro.inc.php';
session_start();
$pdo = PdoEuro::getPdoEuro();
$estConnecte = estConnecte();
require 'vues/v_entete.php';
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);//on verifie le contenu de uc
if ($uc && !$estConnecte) {
    $uc = 'connexion';
} else if (empty($uc)) {
    $uc = 'accueil';
}
switch ($uc) {
case 'connexion':
    include 'controleurs/c_connexion.php';
    break;
case 'accueil':
    include 'controleurs/c_accueil.php';
    break;
}
