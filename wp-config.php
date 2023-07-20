<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'dindy-tstt' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O|Vm{t-6})S9DSoCx;_WRD}_TOR]cz+iaT$V*t8Ty|e%$2TG2rdD8p;Z%;]c.yfe' );
define( 'SECURE_AUTH_KEY',  'OMF0ZvK[=SpKz?u4k|QEmU%*w*BByH0yJ_MLf|5Yq3:3x[8vVQ@1^T|+rdsOvUzO' );
define( 'LOGGED_IN_KEY',    '#]b%dC`{@{pjohX%~JMha_aPFr$F22t&FRSWx~D +~k 3>+u7/sw]A@TF%Y8Ha|S' );
define( 'NONCE_KEY',        'Z!^_>@Du],qCbuD~-O?q8&s3Dm;ld;vs6~R5`+}F:6(1s9$s^~~]`6t^?&FF6|!`' );
define( 'AUTH_SALT',        'qb$nNpAtmvQGj$8LQ.|UmZ2Y/}Gq:Im91pRY,=M|-50bs,Q!S$4*[A|tNW+C0>CQ' );
define( 'SECURE_AUTH_SALT', '<?=Z8*ZelWArFW%7x@3i`3E-A9hC]TR %Wj)6GySx(I9h~O_`bOXQxI6im<p*3HA' );
define( 'LOGGED_IN_SALT',   '1UR2@H7vBOs||uh;1m:_]{O0Pf$z-|&btwYXA){?^6Ss>/lGN@vE!S6kniRhu~;$' );
define( 'NONCE_SALT',       'CR+26RVA~tEKYF@=5)PeQcuZDy# c/4``fR8s,4kSj?_k2<gn#|)F/dvMKWU+q&(' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
