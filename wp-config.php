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
define( 'DB_NAME', 'wordpress_testsite' );

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
define( 'AUTH_KEY',         't3IZHb?,[H(![,>]J%R)}u+hZ8_zt%!0mF!?cPrRfH6Rvh,/;U?PSLK9-*<B*- l' );
define( 'SECURE_AUTH_KEY',  'dY_ta`vXCTi]$[Vxh#PvC2z4.8RO$2#L$V1Y7f1U)2&2k:nix(PUkk<1[aS}~:`+' );
define( 'LOGGED_IN_KEY',    'LJqCevjr334-Gu)@OtgnXIX3OfDHF&.UAGD#)IM7x.Dfp-#sKlT6t5q*Z~Q}r1kY' );
define( 'NONCE_KEY',        's9yT.czFz^+P{_:s]q0E{/@HO(^T;PQz,Ud1,r(!VPyb!fZVD}|4jNo@SysGVQDA' );
define( 'AUTH_SALT',        'RolhPX.8o$a]TfV0XA?vMh*im;y:P`B.[GOrpvAhqLGoI+j6mi6g|AsPGd2k/ [x' );
define( 'SECURE_AUTH_SALT', 'Z#*#GQjH%~OQ/CA}Fh*7Jp!,zHZCGde]+`.i}MZ+[>% Q[umSh=b`MZ8c:x*;jb0' );
define( 'LOGGED_IN_SALT',   'ju0BR[ rU,p{R<R{d~nhb-|vRMBJ@/}^,NWaln|oR=Gw+@l)hX`%VM2bd^~oWw!q' );
define( 'NONCE_SALT',       'ZZ_mbREHW7Ko#!Yr^J4.us^rVlxbZC;V5r)|pYt^W|m4l.`87,]p$Iglx[|wnO@p' );

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
