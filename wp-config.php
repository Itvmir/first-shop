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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'first_shop' );

/** Database username */
define( 'DB_USER', 'Web_admin' );

/** Database password */
define( 'DB_PASSWORD', 'Itvmir1383!@#' );

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
define( 'AUTH_KEY',         'rz=rF~wzVu-$sd#f5^5W?/s+,}t4LgTW}I}{%SXH<4>euA@}mJW~2;,R pK4s~N`' );
define( 'SECURE_AUTH_KEY',  'Pu+Q#_#qI{x?]Y~E83$Yb@i_!g3CP=r^d49ArJinW!b!~Bv]_qRQ:,x`-phl}tgq' );
define( 'LOGGED_IN_KEY',    '9UF7fo%o1iHDNvPzgzPO%j21f?BRAk[q%=x8]$[E44N!U28)DFTmJ=E(9(45fr@<' );
define( 'NONCE_KEY',        '5g?]Zo`~QU?EdI5TUyX`}|^vwz#~0#ofO7<IFnCJ?s!/Ew{-jfPt$L0v=: w@s.f' );
define( 'AUTH_SALT',        '$,x;@Y?v|j&*xvXi[-BjeDfq0&]bgU:gtvp5FLt:XBKC4~Wyv](!Qngseqkw%-:%' );
define( 'SECURE_AUTH_SALT', 'nnY_)u 5 ]Y:L?3@A[)iz+N^`SRMP[%)>rFpJSz[q79|.b1U+Eb1S)W!<Ybz!z3e' );
define( 'LOGGED_IN_SALT',   '0wH+tJ!],kQ?> b.wqJIjPuHQ|{bB9,{WIWcw]kffn$C`8IcCmveo,-g}n}Wl@5C' );
define( 'NONCE_SALT',       '.SdPv,&+1K$2&m@R]#`q|Txd20kINKoBqX4KV 4{l3c3+pp8}+@Blo)*>uM<SyiT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1';

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
