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
define( 'AUTH_KEY',         'Z7PLfnD#1,qD[<!cJwCZMc4<>5&2i f3Di~Bo{)|`,s=_7Yxt1`82c#cBBy+Unws' );
define( 'SECURE_AUTH_KEY',  'tV!AquY*lGjl]J%eb}/ZfU{983xcv&YraDs5>Xa24?KdZ~uzm>B.owKQvrrEZiu3' );
define( 'LOGGED_IN_KEY',    '%*nsKX!bNu 5Hhx&Jr]FHOKlcg]FVX(5#vlb(=SqR7usKZlzSmrte#ej?4bX%lX]' );
define( 'NONCE_KEY',        '=LA>r_kTtNV:9$Jzai)Sf?p?Bd./=(9j0KC]etWb@-Oxh;9ZdIFO*mxp8EE[RFa=' );
define( 'AUTH_SALT',        '+-1q;l&riS)/Z:rVH:eLVU8XHGo(162pE:Om05pj~c4z0?t.4Ug@IQ(?2l+1j*S.' );
define( 'SECURE_AUTH_SALT', 'ejLo`=X*xPqTxD][HoAc%nn?x[GVf}z|]Rx6Hy^(~B$Wgf0d]vvYIQ5j|RCOI2`,' );
define( 'LOGGED_IN_SALT',   's!a+W6,Z-B0$L.u]ePtFr^Ui9RaLg{@Ym/]QQTl`;P)ErbuPEo|8&<B jr$[(02K' );
define( 'NONCE_SALT',       '@a|LpT>yN(G;GQ;a$U|^ :a$D[0eS|TTnM47K1Ur%i; <o&#)v!1U%SVX:~n?P]C' );
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
