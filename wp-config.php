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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zdesign' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'V;,9r>bP2wVm~Xa[`tD*kbX=W tViIdr/cBF/@.Xhs~A}p]tJ*.sV~qsC54:|_^B' );
define( 'SECURE_AUTH_KEY',   '^K,8EI&><q|R=2,LBy%=W f=WYb!7yM/A{cNA3ykhr8O9  lCWZf{OgYmY!Iwpb:' );
define( 'LOGGED_IN_KEY',     '=nhx3Q#upxu^IgYt:LwAi_S.Wxd#qpY8Z>>ovwQp_HV7K<(l:NKhl65EQ}R2rs[H' );
define( 'NONCE_KEY',         'cG&(mBCF`}HR$o@<,.qx_lHZGGev@8<N1-7b*8(C+u]8}n)Ln|)w&`x`TJex,@6F' );
define( 'AUTH_SALT',         'dmo_9o11Q/8j0N<m9x=;jJo+t:6v_wclPPpO|n[-a<-J u:g7WQWFv?[<+UOp-[w' );
define( 'SECURE_AUTH_SALT',  'Xr[bnNSQBpH 4=&9e~O=|9q^Ym4Sux&d!&AR(x{AbM<@tDEgI+epKc]8ek.D)+,h' );
define( 'LOGGED_IN_SALT',    'W}-o$d^<)d1@[.lcW2)d[=Zd7rvcHy;sd1bkHN7Xc+^Pqp(ezW/6cVpqW{?BF>Pg' );
define( 'NONCE_SALT',        'd$sf6BsM[|fNh%T+tn.-*mK`e&Kg,taI.K`dm@ZPwWT3S;>a5*XNXNb[@hn-)z&4' );
define( 'WP_CACHE_KEY_SALT', '8@<TS>^ZM10WX2_39I2U}LOR7]W]@=;, GX ,}>i[Ql9Zy<m#~*Al,x^N%}z_Zby' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
