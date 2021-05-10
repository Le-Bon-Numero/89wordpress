<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

 /**disable mise en page de contact form 7 */
define('WPCF7_AUTOP', false );

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', '89wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', '89wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '89wordpress' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2u(g*sMAgx.7z@AX6H1Z,_@)I-#p-GIO<EFw T7K6@H ]=VMpTw q2QkX4;mdFLv' );
define( 'SECURE_AUTH_KEY',  '~ilzYxgp)#}m&lZ1f+!5.6]I:iQH2>E*$`!+3i&E~d`%JHE_JIi+0W]*QOuL>[lN' );
define( 'LOGGED_IN_KEY',    'oV:/#wSPDL9%Dz19h+y%8iN8!VQK*(SWU&IJ1yF=<[7A?%ojKWuVVuiuTW7BIv_D' );
define( 'NONCE_KEY',        'Ov&xuhWq![q9&!@^HgkU`ag7p(:BiEyRmZ_bf+t:TIQ6Z^lC$8lt6:EtqxRe^uUr' );
define( 'AUTH_SALT',        'M~wpv.>p@VHwPOL]o1RkT8*~+e7&{+kdO}r/yTE*hin(2n@G9g^9pCp(/gw-+206' );
define( 'SECURE_AUTH_SALT', '?KdFMTgAztRhz/1KPi=g^B-pg0~R<^MmrUTk?z0nI <l7|?.[NK:)_=_s=cM7(AB' );
define( 'LOGGED_IN_SALT',   'ty%ke,/ > ^xf)v^dK.rm|R7ss&+m#BF9) 1faa%yfoV6.-rYT/glD0KS C!nK6u' );
define( 'NONCE_SALT',       'jw.3/6ctEnPq06CIC0UXH5)=-Nipu-`tQqkY40gRw:EZ09i6q[c(x:sp^ZE*ROs%' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );


