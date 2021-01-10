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
define( 'DB_NAME', 'personal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')Eb]3TkN,xeo+&v)oM/nudD &e3tjsw)EIRgax<3fTSehimj2Vc}&XXWou3Xgdig' );
define( 'SECURE_AUTH_KEY',  'yefb5cxyo21,idA69zf$NwsnmUYvMhxRuvEL91l+<m<q wdv(`3TTr,+-Q*f|=W_' );
define( 'LOGGED_IN_KEY',    'Y]$ ::Zist3p~d{y41*[io~RBcBb|noMeUdp-wK@8*Xth$C$f);rjawiy<5wv@Wb' );
define( 'NONCE_KEY',        'JjveF+%(xgoy`vx;<wLV=(c@7aB1fRnx#^y<R$RSygn,]TI:0> HWht2DTPI5<$9' );
define( 'AUTH_SALT',        'E@2X8DM;{F~/$_.K,@6m,/M[6zO#h+veW&WvfcQ:ZsZ`W~jib6tY&my6,n,{DKLX' );
define( 'SECURE_AUTH_SALT', '_|Z!}o(lVW2v96brR&7hwkl.|u52LW}YsAf Zv{P6=#=||zxCuYx=i%=L0B+cc4+' );
define( 'LOGGED_IN_SALT',   '=4]N#`mCA[jcAUv3 o(uq{yEMCy|piRDp_f)%m)16(+4-P(~]CudC7w~bN&)$$>1' );
define( 'NONCE_SALT',       '62!/&n7fQS&h(&) =4rHu2^V^_z;kSHa:MFxmTgMA`-4Xtvkc{,zjl+WMBT(Ca}m' );

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
