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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'copa_db' );

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
define( 'AUTH_KEY',         '.<eM[|M_^2Zq2D)&:+5Nh8AG!Q>*emo{i$o:9vs/ /jsqycuy*4+utBk MFd{=I*' );
define( 'SECURE_AUTH_KEY',  ')^0+=--sRsF]_*jEyDO-DgXy#n5V;`!ix,-P[kBxBZ>]L!@:_GPxSSbLLTP},?8a' );
define( 'LOGGED_IN_KEY',    'KN62ohg1Iq`(N#gJd4$BI8,ilzc2B52MXkq*.F8d{50.y#]6Wpi<BcO^yKTAZBL~' );
define( 'NONCE_KEY',        'X,Ibm92 O;_HAS{ a|($RlmiW(r=rjH%#|yo |*1 X|0H4]%Eyw!)Ru3!U:;_=].' );
define( 'AUTH_SALT',        'VQSrUNB*XQk9>*],9uD=KVZIWBZCF3$sU}iQqrc(|3skZ7qKwSPtdHiV:;w32SBf' );
define( 'SECURE_AUTH_SALT', '51?dp2&P:2Ag%/S#F`6COikEy c,08Nhp*A4maP$#YE]bD7W<Yw2N2s+Hj*S;3qh' );
define( 'LOGGED_IN_SALT',   'YdkwC=_0&nO5Qe/X*CW]1qyNqO$iKVI;=_;i-aGn8Tn6D6]DK%$?]Z:+PqOxwtp*' );
define( 'NONCE_SALT',       'q_~aTU[}md/DJi3g0-3 {Z(%Zw,gx,#Fpz1[{p+8;p3 )U%T(lzD*}7$ohA<`Z1E' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
