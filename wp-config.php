<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4]Xc5.%neqtB0KX|wbEXM$KHi/dBq6)|@>{,XgkBU5/=l/{+/_GKg )agSjb~PGN' );
define( 'SECURE_AUTH_KEY',  '#~8;0q#/bqPw>i}g?+UM7Pn8SkI9.A#^/coJQ~6nauJU0{4}_KsVk_F: vtRC%r9' );
define( 'LOGGED_IN_KEY',    'ckcUaFp:=u%Ks>0!8q&DSbpIH9j;ys#Ji5~0,m)ivD{i]~(pDfo|Q1%l(3BXbGK?' );
define( 'NONCE_KEY',        '!I<0(-v3#LoN/twGd2>9z-Bkob N{}vSPaG/IHJ&c4AyC|v*+.zLwDYnA%G?+J$[' );
define( 'AUTH_SALT',        '.Z68oc+6wPfL;{9D$=tQkc-h*,P:@AJPvIyGj23Kdv8Uvf/4cC3IrhOIGgK#7i{ ' );
define( 'SECURE_AUTH_SALT', '>9~D6>-Ojh(Fzd+PU;8f{y|NsFkdq1,~aN;nxls1|b{ffv}B:6z27&)t`bJZ6#wD' );
define( 'LOGGED_IN_SALT',   '> J`P6R6>(NW5@`hx&dI9M1U#$H`bbVjJ(R`o=3rf@%OM]&OM,U=7}Hi?&K,]p@E' );
define( 'NONCE_SALT',       '!?=n#0srH[P6i{`>wq:P<W/%cN{TVvEQ!?kWR)BP32Va90@[KMP.+2s2|QTb)JGa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
