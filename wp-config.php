<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'alejandrapoupel');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':5n,V_-;!k27hOO^-9?:tS5Son;bY^tmU9f8t7@k mg)9B~%uXP4WX&M+,z,Dl#I');
define('SECURE_AUTH_KEY',  'H[nrS%-J1m^5{[%E|-BQM:-Zz-<gNO*#q)(zi[(/?{GNkgE1ev$VNE{_JG:iy|,D');
define('LOGGED_IN_KEY',    'T]&mDU=+RXn_.`<6pmVJzz*UdU|a-pNc]o E3i.@usDa|Na Cr& QTxe<RSKt(ZK');
define('NONCE_KEY',        'L[OO A`4A7:!^X-@:Q:I%vp.^+c@RF gcw<Xny]Z@P=Xs&$`v*+zIe-!`Y]RR(|p');
define('AUTH_SALT',        '.f2`JU558qzu+l>Bi4EwLwFj=86MVC>UpIy:V|7OL5|5.}*9sv#j~!Lu=y7o3[^y');
define('SECURE_AUTH_SALT', '~lT$PP$,EJ{7u#=d$C#Hd@qB;*M]Jb-?O&d+KUSAQ<9ZD-%~Nn/<gaPy8=EB n b');
define('LOGGED_IN_SALT',   'z!, O)mLb|,rZS*l#xzX}s_D9eql{KQZKf*^?|G54-8d:QYAmgQam<hijhuS]71O');
define('NONCE_SALT',       'xB}bgkiVk$2.*8g!H<$98/D!Y(|S=OK|7^Xiql+I/[$tv6o6XOD|+5o2w0${fGC/');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', true);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');