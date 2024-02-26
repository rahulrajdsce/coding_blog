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
define( 'DB_NAME', 'word2co' );

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
define( 'AUTH_KEY',         '<a+jZqJ/<?DZY[AR)d=9t62k/]d*.H7 C_~+_dH&Z^b)9Pk/f;;nu+a(RFWg=5Kl' );
define( 'SECURE_AUTH_KEY',  ': mGSBFp%)QV$ZZ7jFMTxd$Y-cJ#|a(_/g#=<V:sHGN6mp>IZ=M0LB]gZkvV:3Ks' );
define( 'LOGGED_IN_KEY',    '.du]nOPyBs?,kb_5K-<vS:UUZoxJ2X<akcK a5LIYe@t1hh7K>l_I+N=Tj[CO9bS' );
define( 'NONCE_KEY',        'Oap;z]W}C$w5fRdfig@Z3 k^KAE>A<AS ~cyw?sabpLwnv+m$)[)Wm{X&F w]V!G' );
define( 'AUTH_SALT',        '}1?4i7X.,:`6noW/TE3L=arkz)4M}Q62z,;3HqvF(h}w63-^9LqWa|gq|s|}F)`k' );
define( 'SECURE_AUTH_SALT', '?W?@>?9$;!%=~L`dNU57xCE&~Wv#C(Ka4@o~tWWmboa32I|CaR5 H5cd=JE4D|*5' );
define( 'LOGGED_IN_SALT',   '*(&5D3+x1~il=Ecc_l`d/tF_J%cqHO`rwN9R8#j/g-2w2n1umgaQwdj0#TBCI{bR' );
define( 'NONCE_SALT',       '5.(vK#UAF:s-u]OS!YW_ehVx(&C[,tmu.U7kn(5v#&x~AjP$TC,b;g%]%Kb|U?65' );

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
