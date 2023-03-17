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
define( 'DB_NAME', 'jonathanbytes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Jcr3295' );

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
define( 'AUTH_KEY',         'O58s9pYCB-E<%yGa% 6Hs^b:p^0|by|_khh&Kw{Fhu.faah2r[K|B#M95q^92LFI' );
define( 'SECURE_AUTH_KEY',  'qLBH|:D_1[:H<yzP!l2T2|~]OJrzi?4wJ;H!_Xx@Dh_sJK(G%J!A&;253;XM2X(0' );
define( 'LOGGED_IN_KEY',    'PQ%J`]%r$/4jX!A1j->mGq2sOBsV(l/#Cx{9_NhWpAo`E |jSXD7?JT<D!={n=C4' );
define( 'NONCE_KEY',        '}B_4.T1x>X]=%U>^zw5TR uTb&rd7-j0p&OihQ|JcStcpoc~jG*H[G=UV$2p(q3#' );
define( 'AUTH_SALT',        'V<zw/`tr9U?Z(|iN6_=dwtNX|MY4V]KDyZvPzf9!tYEpK3*m:^OX,M&=jb?}a$0)' );
define( 'SECURE_AUTH_SALT', 'aV_E iNR8/K%,`YoohT+,n7G;ONRHE:[k[mT tL}>c^[$ef4pkv,PGSWg^nyqT,_' );
define( 'LOGGED_IN_SALT',   '_X<qMm&B5u]qZr2{+u5aMZbM6u*mJiFrkjC6@}m5 _6Wmsld?f%9GQv%#G%d0eWJ' );
define( 'NONCE_SALT',       '=E6cE:3$&cg$97aF{<!J.$B`)gu_X|YjFO8_yD=R}c<^57+z,u!mAl4msMF*{{E;' );

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
