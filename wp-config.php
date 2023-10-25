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
define( 'DB_NAME', 'digital-marketing-site' );

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
define( 'AUTH_KEY',         'yHX6rs0YF^Kd}ML/5.&[+1aE%ba>KB0y^f_.xm<T/&O@g%BXnQKuwyn:xg8v3ZA)' );
define( 'SECURE_AUTH_KEY',  '*s&mJuHBD?#g}E$V]jg)QVm}`YBNYDwL*2z+EmGe%N7 eG8h~XmX,+tV#RszK|T*' );
define( 'LOGGED_IN_KEY',    '*tf$ 2VxCK_;}tc83~QZXAS%p8t|)E2:`AZt8<9@2i[9Q}AyN*1G{z5L@#^YdMur' );
define( 'NONCE_KEY',        '8l:JKp}ycC<giD,DF]ruJ+ fTIL?)@Y0i%0$u50U9#sDJ+&Eb]}onW:|6GdGlrHA' );
define( 'AUTH_SALT',        '}o5_R/6>Ze|vJC<dBZ*x,V:Q{yIM,Wg?Gsa(4eI@Nn`sP&[0Xd5g~U,cuI()Xy~J' );
define( 'SECURE_AUTH_SALT', 'kqL[Q%3%R?d;6eNg 8IU;Du3tyJgBGI#VE<q4<K2%:}<L%u{t>IV>eALf&sgu`=[' );
define( 'LOGGED_IN_SALT',   'PPx)Uc*[PACB~:l~e:%&qh{u0V]Os;!tv%wnud9k/X.i-8>A_|Vil{4i6#q`J9m3' );
define( 'NONCE_SALT',       'pJ2(.vM1>~cUQ&txD6@_-PZ5In%Q|?Pg|vR_S&-R?g-q.93MaAIC0ny2Hs=Zh/ae' );

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
