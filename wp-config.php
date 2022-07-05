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
define( 'DB_NAME', 'customposttype' );

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
define( 'AUTH_KEY',         's#w +C%-_/@hE$^UU =jzLY}68~E=7DED+|+=YZ2WX?s5-5xzy`EL}h&%vy`}JiM' );
define( 'SECURE_AUTH_KEY',  'OPQ?D}ta(+cb68p)%}EEi)BEACWT:Ti1~D^}RaeVY }T,:HV#-xpEh-kp2v#H_.A' );
define( 'LOGGED_IN_KEY',    '>`L$!CHSOdEy<ZYoQJt_*v#g4>irw/fbb:f(:5M$kKO;u930;iAW8c%[sb_nYP[t' );
define( 'NONCE_KEY',        ';-^D=QMbS&u/}2SbA=Lus|ZbBElgUBdgf|`i5Mp(VZr**Z4wFbV5xFyWcUw*?~(B' );
define( 'AUTH_SALT',        'KxgD#B ~x)to,6#9h*?CPzQc&a@?|X)2h$.0DT3GPu-;ZH,s[mRsxsc0Dh9xhXwC' );
define( 'SECURE_AUTH_SALT', 'xPGD:gqTKZ7p<cO%v(7-}`({fVS?-^U!o%Deep1a-(,kMtR#/A(@@ZTx?nz=Kk@2' );
define( 'LOGGED_IN_SALT',   '7Zv]Stsg;B?WETN_u9Ux,YFC4oow_@rhi}/17QSn[=G}=WXZwozIJw4lk%]%4I[.' );
define( 'NONCE_SALT',       'hlX(KN~S>c V2>~ycf<c#%OO uGWlcby<L,XIWXmQ>O[jZmO5OKFyUUq>nTueAJ|' );

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
