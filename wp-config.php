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
define( 'AUTH_KEY',         'M6Ekg3rQGjBgNW;4 |SKACIz=A;UqgG;[NsZo?3myi2`qG{;E4Ge|KO=kME[$z&M' );
define( 'SECURE_AUTH_KEY',  'A%RO1/r,L=u$hlX6~]GDw3exVN(Bfb=Q`Z/Zgn:*.]m<wTeJOU1bIK9AQ%!22V{I' );
define( 'LOGGED_IN_KEY',    'NcVm~8*W41B%pc^o{[jwH@i_bTLMGqP;`sVFVO]1Gu6%/VD2MQGxbDS(gWnvX:rz' );
define( 'NONCE_KEY',        '<Dp 6#+;?@.w_?:<E[0&(PZ?hc00O[Q+&%Ehf/0?ZuEQ|BIGpJAot&!n;~&o&ocg' );
define( 'AUTH_SALT',        'BWW;9QsSBk=t=Bk<Q,Tz>0m-DcTK[#*Ne7ShXoa!^ojIgrZ<7wH}:iB~,O!ZLGV_' );
define( 'SECURE_AUTH_SALT', '({jS eKC/X,x%S,!^YHzV/loG/YO-K+sa;.;:?9|b8Yo|v1cwb4nW&5*`5)K`4LC' );
define( 'LOGGED_IN_SALT',   '%gj!mUM;~`A:eY;Am;]z[J#c{4_Wi%h2P(BYLj,n&a7?i>0SiG|yRu,}5v ]tvN<' );
define( 'NONCE_SALT',       'OHOmh?z#(CT*+3Cuh$81Famw=LF+`TCK8/pDWagIB$N~E$faX5nz=rL*pUDpiA,S' );

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
