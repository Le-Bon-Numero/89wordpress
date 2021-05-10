<?php
/**
 * Fichier qui charge toutes les configurations
 */

// Fichier de configuration générale
require_once 'backoffice/theme.php';

// Fichier de configuration des pages et des articles
require_once 'backoffice/post_type.php';

// Fichier de chargement du css et du js
require_once 'backoffice/assets.php';

// Ajouter le Custom Post Type "Réalisations"
require_once 'backoffice/realisations.php';

// La fonction pour créé les images de header
require_once 'backoffice/image_header.php';