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
define( 'AUTH_KEY',          'u[2yTGA!] N5!D@0ote}3rx>U)oJ.DS[9jSa#Jc3RU d@wXEW0F85d7DW^#~%j*u' );
define( 'SECURE_AUTH_KEY',   '- $O6UdA%^3U7 5*^fni/TT1;2j+NRML$@^1A5 7~up%P%0QV@m)qq9q?be;gz[H' );
define( 'LOGGED_IN_KEY',     '%y[5U`(!;,?5T@8l=Zx2I}4bX[_Mg+@hh[.By[eV,qx(u=b-jyon?wf4R_@^-aL%' );
define( 'NONCE_KEY',         'c8P85?](DZP.R$_A.j=rTTLwj^?[%8o^,s-6t$u%du,@)*i!W*l;UMW,{I?[m(|-' );
define( 'AUTH_SALT',         '#c$]U%N`<ZtRb.5yU~$M SIEZJ+M56j5pOsP|`-O2)w@.{^$51^cJHIBomkptaRf' );
define( 'SECURE_AUTH_SALT',  'vpBnTvL t7Y`w~V,wfXu{R_g!<xQ!cX1283I1s8(q&2<VAIq yE!k[!{_B|mZdt|' );
define( 'LOGGED_IN_SALT',    '5XVn.|s07)a?C,}jk^a/di_6k?dBE(uy9?*<]>5)z&:F>crG.ULpv-gg[Of99zn!' );
define( 'NONCE_SALT',        '/ :Velye~1k/Dl%*o}t]jIwcQ(_Pqw,GJU R^y|/s57hQNI;lW._nc(~=6.7$S?3' );
define( 'WP_CACHE_KEY_SALT', 'A9:r5NNdp=?S$> !6y.17rhB!W[:2(8wdOVgm3Oeoy>P9zBg4|KeCAC5KnU;a2o`' );


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
