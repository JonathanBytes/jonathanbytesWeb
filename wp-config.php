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
define( 'AUTH_KEY',         ',=DO0:eXT2v *r|D..XTv;ury@sin$t`A6%RtCp-:w!RhkyutGxqVn=fRj2j}1zh' );
define( 'SECURE_AUTH_KEY',  ')>[D;|:^{H[IUoNMfzH*!$D(zcV^[/a/AX9LpB$&ar|p$1j*r3!A=FF]EtZ<BHkU' );
define( 'LOGGED_IN_KEY',    'h^FNc/*!T!vx~QWyoWROl]ph),GO::ge>>~-*Qim1Y^k@CgvVP8X1/~x34VrBJ.c' );
define( 'NONCE_KEY',        'Rvc#vxPWE{AJHea-:8UtlfkpLw{E:x<%6:F}hc$K4-r :AnS:VS+z@UU~NwRI3WM' );
define( 'AUTH_SALT',        'rHuwHw0.r2iat>iV3sP&Ji,Y D@bqa&pzBT+Og6(SVVfFv0454FNQX1SsR sMtTl' );
define( 'SECURE_AUTH_SALT', '|7-:wC{CeqwjKB{:x8OIF|M6@K)IDh[H$->A0wMopH[ z{uxgeW6Dt-RZs(U`LjI' );
define( 'LOGGED_IN_SALT',   'z;$vEZC )>O`6@u0.*I)R9BbCM)Oi-ljX_R-NF1?CXd/{U,dZVeY/x:g@nSG}|Sd' );
define( 'NONCE_SALT',       'wIAI+}3LQq)@#6>2~ReUN5J~w$2wqX9,H:ukj#K}=N2;Dz]+WoG6Do{tq2$g*i~G' );

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
