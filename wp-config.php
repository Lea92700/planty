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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '&SvvH=f-=7I/yQ~ITo|9{]]=F*6E$9.|B%WY6aI5QnG7IaB^r|+V kbf82]q[uIo' );
define( 'SECURE_AUTH_KEY',  'TF3u9:2gAJ6MM9AS8(UOEHgO[]J$cTH9>>[;%;5EU4)Sw!>-]3F$yCHP%kD;tN0=' );
define( 'LOGGED_IN_KEY',    'dBmx`XI.4E=>>ST-Y4 Od}?;U?a9e7MD&6O!9[H#F~z>G/k{N59xD$()plH*%j#6' );
define( 'NONCE_KEY',        'EB ;.`pU(A&b]`V9{nX{v#Zd/)&H:m-Qj7_,^E>fDHrkQ#.3P*;Z48}T+Y9hLG!Z' );
define( 'AUTH_SALT',        '>J/Y7mz4n5J%w@j`h,941`=0t8qa>8]&/276avipvjvTr{DoO:=#IKISOvk#MJc,' );
define( 'SECURE_AUTH_SALT', 'oN)4+af.4ybp$Ov[{3C)A1>>o9uJ6p-bt%S2sC/vs$zA=0m<m7.LoKPEh!$+NlhK' );
define( 'LOGGED_IN_SALT',   ')<(2dR%`#+l1r[];6nR_ZthH3{ykve4rm$WAUwl{>_s&$QvV.y(!P6OeTwAv0d%?' );
define( 'NONCE_SALT',       'k@,)tkcSM|dcXOX=y;L+}#75!W! &MmY6*9W(;r=7I_63-{U%f5I4`Jqi3@FDc)b' );
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
