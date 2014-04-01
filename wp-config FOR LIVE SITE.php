<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cvs108_wp');

/** MySQL database username */
define('DB_USER', 'cvs108_wp');

/** MySQL database password */
define('DB_PASSWORD', 'FrmWb!08');

/** MySQL hostname*/
define('DB_HOST', 'localhost'); 

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('CONCATENATE_SCRIPTS', false);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AB5-$)Y1/Ym`sJG}sS|[7oD$.GSF)r=#C;Y~g:^;IBp*-+H]c6Su#NF|(xY(^eCe');
define('SECURE_AUTH_KEY',  'K|!]cC*u|Pau-cBq[kOiO7Cu|vOt2?ApED=66-v3=1+hc%=p6lTRF|4lQ uSrQ3!');
define('LOGGED_IN_KEY',    '5~B5Kw@O{oiQXr*|w|$I-!b%FWWD;8VnF;]>.YwNO,f-O|tWFG3bFWzmE Q_rS^+');
define('NONCE_KEY',        ':FN#CWHCG|[mJ>iu+pF|A5pu[gwN`VC-#`:zm>f5R[H!FWjs<cNAig>-<SkPa%6a');
define('AUTH_SALT',        '{6Up/P+P+iW.Vkd3s;e$o|?r!?Velw5|.V4WHKs=Qgz9jnO&D>5}ao9=uff501ui');
define('SECURE_AUTH_SALT', 'Q+6E*aBHww4#i#QpnOfjaS$F=rC s-nZVP`j4gWoVoWoug4$gvWy4`N$/z%7,E|.');
define('LOGGED_IN_SALT',   '_oX|p&kPHu3x|e{B)<0<>:ML`@$G`A|`q8fX3@`B`pA`uP*Rvwrw3_z~!|hy:{|W');
define('NONCE_SALT',       '+iIr-;. *mAuy}X``H_jtT,r&FaaV=T9G+>igR6bK(o&S_+JD.LAk=M~efAG}%jz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
