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
define('DB_NAME', 'schrammWp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
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
define('AUTH_KEY',         '/|w$.2=hB8BN|}Z>x2-#Y3gq-}:N0M9^M-Hd|x;(kChTn4O710K|}.kW-S]#/5-9');
define('SECURE_AUTH_KEY',  'U{{:._dt}N^~{BaW~$ci sAf?L=!Y)UnEsDJN5a -WI+Hy`x,I^[|8j>3wyBle{H');
define('LOGGED_IN_KEY',    'ul)CC,SXg8;@|xQEnOt1:E+.%J|o(+9h;Vim@5gZ,ab@U#7o4;NfnK5-CDtg6HY9');
define('NONCE_KEY',        'o!<yAd7EAGY)|{G~R%o^)v5/A[8gZKrcJyIkn*6-4r#.CA(@%u!,QwIMsytGnLCl');
define('AUTH_SALT',        '{XST8C0KVwm&^`TUA-$,/[Y-c)FqdGfgU6Y9YeR#PJ%U_,r`Y^Vlj!VfXaIV;p8.');
define('SECURE_AUTH_SALT', '8)JTQnlr{?R|l6$McT.T3oxJTA@m|YY(Gj-G()<8bXk/>SGkrr9>/-u[D9?fY[=U');
define('LOGGED_IN_SALT',   'uuI|?+zht;<#w!gb:AY*~S*,F+miBOG^gu7{0|LIVl9XEC-.Q;./z~)J[6A]mTEG');
define('NONCE_SALT',       'bKW)71 p#Fj{vPHl[br(?DDc 3zU`_I.:brJp^WjL,oeb)+|+2/wFNrf]~,MV@%v');

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
