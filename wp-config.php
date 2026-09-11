<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_nguyenvantuan_buoi_1');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V*_>Dh5]ieB!Aej(beMrK3wo^f;s=6CuM$Z1WNlilK:{P2B 6^=65*T%;(Jq[ghk');
define('SECURE_AUTH_KEY',  'D,5WMQA8J+cZf}rP<!1&#)~i}GQ+i9Qq(&~+z*1>8)RS]mMEZ|LA1O9~#Y{7E}% ');
define('LOGGED_IN_KEY',    'DPtu<H}Jx#|2`MN2<i(yGc3c[hsduA.dKQEJSY*a]Yk.eljgH% fLq$Vmfm?HwGB');
define('NONCE_KEY',        '2Wu#t~,P^DG4 qe)&Po&SUq,Poxj2: il@,HkbIar~KZ5P=g?7&7A~2E1bwH$3d/');
define('AUTH_SALT',        '~j6zz$W7`_+G!,PbG<WffG-Y a_X5w*D0S.M^XVaL0 `F~GQ6:!S76Lht.Yw.x4o');
define('SECURE_AUTH_SALT', 'p~h28|Nb3PtV.VQH*w*=%:9%HQ$oqU^S).3`qt`]CJY7U}J{c]+ 0<q}|~L$,;Yh');
define('LOGGED_IN_SALT',   'i#eN]$p|ia=3e^w93OzrA4kBYu.8,yl Q5|Hti!d=.TY:2~=d(C-KlCFY/Oq RZ0');
define('NONCE_SALT',       'mG:wkx_Mn~#;4kTq3|r_djNIkyJ?9}F`V:d>K%[G:xYM{0.<]BN-]y|i/)OgO)cr');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
