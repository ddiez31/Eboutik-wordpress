<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_eboutik');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '1aLdq)2EPUt^W#ll@5<Adu?)ncj=r(fgE!,|%Yg:;kG1R|CLqkaY$bA~n[6M84|n');
define('SECURE_AUTH_KEY',  '>3*Q}RT_wVxx.39b&^N)0h*?f[~4^:p,1iZ#[[FvK]Z7M^Ua=$Amm2)#xV|#<1fA');
define('LOGGED_IN_KEY',    'GSIp>SX4}y`SJ9rykyW~^lyf-qs>Ats&F1Pg,4AR;aG#jP~hI3eR[O-(2c9etLXk');
define('NONCE_KEY',        '<q,R)6o)FgbtkDK(kIn<ckRROkVBa|jtXUAI4*:gPwFbF78/> >~cSs[vfHZ1mly');
define('AUTH_SALT',        '1=c@<[g%YNNo%-%$nPl1$VqKp:E,dgT >[J{I&#sPJE{Mb@NoOP_3=/Tv`:yc7S!');
define('SECURE_AUTH_SALT', 'y!/d3VU&nEF;hI;z8h{jmBZH>@/s0SOmd>ap`]kQ.oqo?F93 ]CMbq<pls|X#xf=');
define('LOGGED_IN_SALT',   '(.e?$_a)Bu#BVLeQLF0&5F2Askp0xId~FQ]Ubg|JYKDN[:A[$vLIC|r+u#RPL.7N');
define('NONCE_SALT',       'xI0>-bM>{,5]kaP(*!S&-wH;X1DJ9O3:h$%{|)SNV A[e+>=RNk:33AY%&{=K;P9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');