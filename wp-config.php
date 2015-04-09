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
define('DB_NAME', 'test');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '.%Bn@oLZ>jNYz#n27}C[ (}#e,!|hYc}iFe:X;SmX^_vha+Lg4Cyg7=|>R7G.#f9');
define('SECURE_AUTH_KEY',  'boYIYxHB~B&jPwm!+>}Ale-j,D8|6xw._&0_+jzWDKFks<R8)WgXJja>}%rLy-Ys');
define('LOGGED_IN_KEY',    ':{a(o_MiUcBm(oKw0A|k^L$ >J[v`2=,Iu7JxBFLZ`!+77{Ag}:O/IQr&K3+hY-@');
define('NONCE_KEY',        ']h!OHVj8X<)/J8xw{*i,/JC,Q7%eJ+[O.|EwU}3Mf:6:P{k/TK*cfuDH;R=;+z0w');
define('AUTH_SALT',        'pyEl=sn7q-fbNU` b2BV/x@ebGM$9yTfjP+{qIKh9W:@fm;?2.,192q8:GK)|jWL');
define('SECURE_AUTH_SALT', 'U}m$T|9DQrwGOwe@;4.TDR^6+^3?%5zM]`c;rG^<L!;>ZF:;[{:?E}%PCs*->@8E');
define('LOGGED_IN_SALT',   'z~J-).yuS=I`G*ereb <Uz*X&U*Iw<b~o+W$i]E+sq_8H]KA:EN;c%61-~|EF<YE');
define('NONCE_SALT',       '[$_y8C%>o_x,,T`x|q|3,)@+W?/.+J%_+P yK xDHQhA<YgN|l;{my?*;.Q4W:@5');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'cs_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');