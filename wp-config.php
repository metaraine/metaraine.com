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
define('DB_NAME', 'manicexp_wor1');

/** MySQL database username */
define('DB_USER', 'manicexp_wor1');

/** MySQL database password */
define('DB_PASSWORD', 'H3Ffqp5Y281tRsK');

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
define('AUTH_KEY',         '}:E$-1-s3H95uB4<I{HOtJF++)`WFI$qm+W:;1zHym<?#/8*?%U,Ceeq1w4Pt*&x');
define('SECURE_AUTH_KEY',  '(%re||+F:`LfLGX-#&e_hlmg!utPe.c/If+ua|lmLILMQFg;hn8@=3<*H;jC{4rT');
define('LOGGED_IN_KEY',    '2ZT58I^e6V.N&Zo2T 2]nB[M(;d`)TWe[C^8-;SpO4j_AfCX@MNEp/a|*PmCy=f4');
define('NONCE_KEY',        '<77)I7bG;Z6T{Wq-t-%wT8|MI0a{Q18V-.LTzv)z}$GmI] FP/$.5c3#u pBkL|?');
define('AUTH_SALT',        '.M9@fU44GNwZroGpDU+:i)?d`APCGV?48jlU^|J++7-hRj6qO^/;+u#$C-MXDRHY');
define('SECURE_AUTH_SALT', 'B-m|]:b5nxE&(PZUz]zB2erF)eC(z|nbH`vk8p4,s0O7~Pb`:Za->tj.(5>5%m[)');
define('LOGGED_IN_SALT',   'h%|^y1z+W<L)eeLY|+Z-/BXNjSIrU|C;4F|>+)k]:+K[?`1|wDZ]:cN9y9l,?Y[=');
define('NONCE_SALT',       'ydS1$W*ec.`07[V,DTN4]*K`MX/j,v*G>@blEw/H{.SGPcNi lrA(D`}6%y 1f{_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrd_';

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
