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
define( 'AUTH_KEY',         'D0GXpT-NLJ!ah^ka .}4vz2BQ4i7?OpT+ZG:$J/!sdYtbVtiA [;]!!,.>>6Z2zw' );
define( 'SECURE_AUTH_KEY',  '^cnoh:ku-r&Hr8nyv%ZQi&2{*e1A@)&)+E*6xA]Y[Tbwwz hxgX, KDv3RKjP~F{' );
define( 'LOGGED_IN_KEY',    '#rzo_qMV~VF`,1oeW#`X)A@$+y7}241t-:D9R29mw-igT[B-X0Q)LS1q56LdHJT<' );
define( 'NONCE_KEY',        '^=h@GT7}Uu;0cF}5vs#rjv.TNhSo~|H^ sp2CEY4w@G3zfWzI=xbw?i)q*hY*AB5' );
define( 'AUTH_SALT',        'img!hMs)i{%gP}1?ea.[r~9tlRP? u]1[&5X8.O~|X<NkkyebmCb<.6v&1IU]f8x' );
define( 'SECURE_AUTH_SALT', 'H8K`:}wjV+{`6*NcubJ7N0P#>+wcaS5XqVY?2DE@%YK%}9NixUM} MW`Nt9fA!pY' );
define( 'LOGGED_IN_SALT',   'd>sP9(g!*4nWS->9}SNH%|0L^@Pt=9w`(d$<Gkw*_Dg4E/tw[xlm~&%%9rnuA|*]' );
define( 'NONCE_SALT',       'f/q4]kUE3K1b[Yt=MDGOVfn-6C]Vz0v4&ptnv{DxH5Q|-3Czhtz#;a_JW-8Rv.N^' );

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
