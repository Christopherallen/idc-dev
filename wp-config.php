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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':dD.m+A_}B.Br/P0jKAPHn}JQ=^,FB1YrIt%h!^]II#`$sgM1]Sr+C54Y{i= }CC');
define('SECURE_AUTH_KEY',  'A.Y;_c{M:LSSQ),isB>k>22N@+O{2PlOg@D=OIM^ Y}~[A!$^rWRe:_>Tg-M!{!X');
define('LOGGED_IN_KEY',    'R.;?r2?)sPt#Mz/72kg(T|WVl$T7d|6?U1[u^1#+<&WN[n bh%4jNlKnsGK%Z&Ik');
define('NONCE_KEY',        'H=mlEk>`hHBdoa/HY}LEmCdta`[<Ib$/sZ%`rHBc^>UpR^h7?.?Tzm}o,BzPd~_~');
define('AUTH_SALT',        'p?i!2I,sR0+x@W+GXfF3rB=5--+pD<Z|+d5+*-j-k7.Bd$<l]=SZi^U# mxwNI3~');
define('SECURE_AUTH_SALT', 'vNbQBH)0kq44fGTgs,>*~|,-VZ^8?e.-~w70EX.:5$vpyP0F+c{&DI-AxByjr%1|');
define('LOGGED_IN_SALT',   '0765uUxh%:B4wUl~@Lvs6W%;45+}UuLmN4Cyy$?QqS:s2Z9?c{= 7k3Cuhc#Mql ');
define('NONCE_SALT',       ' K`o6NrE|@h%X)W=3nP7oY#sa_z*4|vJ07:NYt4M:dj|@mF_FvAX.IWRSe[A#.UQ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
