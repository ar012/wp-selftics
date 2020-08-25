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
define( 'DB_NAME', 'selftics_com' );

/** MySQL database username */
define( 'DB_USER', 'selftics_conn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'selftics_conn' );

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
define( 'AUTH_KEY',         '^OC8u<e_EEo0!Xl[nD/3#epcVL=.sbY$493v 7>u,K~%aB)+gBqQi#<%ox`QUAW3' );
define( 'SECURE_AUTH_KEY',  '#b/J?t`>n$/|%hL.7Lj.@y?13atiR@$!5X5Czy)+w!>d)i0lyRT>efQCW|2x|!nK' );
define( 'LOGGED_IN_KEY',    'jIDSRbCnt}H>YLlOLBRF-eA{n8LuvB+5{XL=4b+%3ictY}d|XH#!tWZZ5[6etxth' );
define( 'NONCE_KEY',        ':Rc{-i2|*49;[t$94l28&e-mC+UJ_E~^./YMj~,TTn={5Xm0x@&0j5HPC%pj1L8~' );
define( 'AUTH_SALT',        'aIi9#>QTfajFMvZ+6}-8!:x)q,<G7%.b#Et=3-i;s~*`wY7E/q2qeW~xLQr`i&e#' );
define( 'SECURE_AUTH_SALT', 'Bg-hJ.UZ`f1L bo?t=mtl`P+LRIV^8 B%<W%r;~:jJK2-ZI^0AcgFOBW_1qZM,?-' );
define( 'LOGGED_IN_SALT',   '(nbQ>m.cmYv>kmandG@wtrq9E*QRlc~F:,W>iD3yYQ2)M$8rkWIy[S`oBsM}s#d#' );
define( 'NONCE_SALT',       'U?w$NZ1IOrcgw 1z%+=]vo5~sBDEz^9`-.K#STyF[nBe)oj|bQ^?<xry!V^-0k&0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'st_';

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
