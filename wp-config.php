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
define('AUTH_KEY',         'nG{-4Zzp.,P9jh%Hjag%|e2.Al~YxS<$Tnf2b!2;U$4Xx6t:$t$T2&(7MR-^|[_w');
define('SECURE_AUTH_KEY',  '7k--~]0B`f:5I)kz-k{^1TRV-_2XyOo6co:_>G:9dw]DSfeTfnR>7_a;Fu|D9W-=');
define('LOGGED_IN_KEY',    ',<[g;NG7W&f4E$eN;~N+_npj2H=B/:n uhz@`P+p6,&/6{F_zYpGki9]>M9?~6Jn');
define('NONCE_KEY',        'YIsR,Ok+4M^)`3#3a,{M-x<:JxK!Fa+!C89JcLe+c#uIU[2&>/$i{R$;n#xBn,C:');
define('AUTH_SALT',        'exw~MI1}}`g4tDU43+/YM8-c[sRUJzmyc&A]YKXNwO8-yw$2&[lUECPqs#1Gb*q|');
define('SECURE_AUTH_SALT', '-nI-*4YU!U,{N5(@-d =n$U~eZUdi+`e 5V{%Qh.rLTdv(E[o&K>D^a+49@pTH|Y');
define('LOGGED_IN_SALT',   '+sQq!HaBgU3VRuNgMnuB%@8M@x~[y!*M#cG%5+|In*D.Tc!Yvxl:QE+r7aq>{{|b');
define('NONCE_SALT',       'E?oN9w~?){UN`U|:ds^?7<cLh~V[|VosY!-.4?#K.`Bo}8PR.E{yNIs {s<[+WYz');

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
