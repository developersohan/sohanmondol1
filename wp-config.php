<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sohanmondol' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h&Q}Z%DJ`;tFHAt]M<A3[(SC-d=N!VAVy|$FPOxT/kYw!L ze(5Segy4LO:xA!^^' );
define( 'SECURE_AUTH_KEY',  'XmJk%4F<, uRLbJT#*z@[E}{5Mz. <Rh1(=%3]P1h3H{FHfyfR)cx==8.KEz#OvP' );
define( 'LOGGED_IN_KEY',    '(Q7@zW<&HVJodhYk?V35#h3JODTEbD%`sXDb]M_oi:(u[s(NZ_qUCsX%*}QdW[yk' );
define( 'NONCE_KEY',        'K9Q| 7dj+!%GV5,pbM<%q0m!@^FkcF7pnu<] u w.qHP=JL5ET>elucPf2dZNsfk' );
define( 'AUTH_SALT',        'zDJg6W`&/[QsmK/lG$^o0e)fBd?0{}Ut!i}x&GYu^+s2#f0|dai)Q-R#gFUnvo+E' );
define( 'SECURE_AUTH_SALT', 'Rwk1mz`4a~2%vI?Gu|X#c#15&-bP;Dg(-No!|G*:QY#28W:0r9KY4q](KO`Q2wwi' );
define( 'LOGGED_IN_SALT',   'jWfSDE)vShHE7PjU&~,vkg{:LWC[GSThoXXzZg)eMSCK1s;H+7E%u,MBxQRI,eQO' );
define( 'NONCE_SALT',       'D[kE]o:f~!I_jgOy{pSQrXoS1sr[evh/BqCosobU_O4@}(.k0EJTZq~%8PgHq}C8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
