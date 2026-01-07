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
define( 'DB_NAME', 'tukang_jember' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'tv](1@Q<j8 FYJ}>W;:p+rp]Hh=8);(aO/ueY_`M!F/O79^Qdh.R2c=;]G*J:2u7' );
define( 'SECURE_AUTH_KEY',  '}6AWdS=1|sb*px BD.ouFJ>13MYZsrBAjQ1o3gq+Pgf30z6yr9^+OXG{HxjzR W;' );
define( 'LOGGED_IN_KEY',    'Sm1*{B6l+T%L{7-.hU7}9_DPSX;ucI[.$u}w[ &I&RTpM3yggOqW#OGiB=6upQ}:' );
define( 'NONCE_KEY',        'C75uILk/ggl#ZRL)/yqo{ob99D=2nsEy*3@~{mc.M,S<;lhW/pzN{i#hNR9Y<CJf' );
define( 'AUTH_SALT',        'c[v7EFyrfQ[-%LA@]|?pC98ON-GC&%c| {1H36?0fUL4A^e9(QZDq{~o)[zjBI@~' );
define( 'SECURE_AUTH_SALT', '5ePC*:4;?KlQ].L(j_V9*]<Ppx84E[FKfu0@l_Eg^~)g^c&Q,urr8&0GyNqFIE%-' );
define( 'LOGGED_IN_SALT',   'o(1HXB_~,~htJ86;1F[9%>$]{Lm;QeaL!|m+;p%.4uCy}Byq47K1uXO?#ZdYm|;K' );
define( 'NONCE_SALT',       '(yq4{!#`SoDrgI2 XAvo-*EO%,IJ;w#H|&Zac_Dm[~k(E.&{CU@AysGHX7/O!)).' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD','direct');