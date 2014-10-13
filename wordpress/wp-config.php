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
define('DB_NAME', 'wp_hireminds');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']7Rhtq*))t_?AFz73Ba|h+:1B_ -CA.%[wN@8CP_3kr[4:-ZQ5x h(!gRTQkrj)A');
define('SECURE_AUTH_KEY',  '[(Q9[csg/yBE]oQOFb= +<KEVPu(4M-i`z!,n,D^{Z1No|h9MZ;EE _5G R72SR ');
define('LOGGED_IN_KEY',    '1{%XC/%X/;X5pK08ji4.7@r|/!w! 3YaZ3-z-;!.rkKpg;vrn%C>JU,,H RRgdBh');
define('NONCE_KEY',        '[O;w`zJP3C]|HoKN[![tEy{!wowsNNUz{dNNQS%: sn_ mzu$yJK47^AI:>B^y?c');
define('AUTH_SALT',        'oe:FlqZVcSlIYp|[M[)Xk!KK;t+pKm4EF/?dUlR,]Hy3p(z/-FV+xEC*Nk?t#/km');
define('SECURE_AUTH_SALT', '_kp`Abh8}~03md}0CgAuF9I_MGP=+iRy>VLYkl$-]D?5WKND-@9 t|NuzN(_h2yF');
define('LOGGED_IN_SALT',   '%-K@`4cvwE2{VDaQ<*n.gi0lXy-YZMWdJBf[.{V5.Q_ (l%CiIQg69=vm,g[7q|L');
define('NONCE_SALT',       '9CX&83g2`m0j4;&btO!{*+0?7Gd|sY(T/t`+Uqhp{WxG)yV{-((2NRaNNqcv,Pot');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_HR';

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
