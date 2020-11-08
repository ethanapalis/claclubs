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
define( 'DB_NAME', 'claclubs_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%7f4rb07n3E.xb4A#w(EioPte5_*Ri!a$a#-$}.hZ:_kr+zv?Xe<~2v$&n:Vk0Hb' );
define( 'SECURE_AUTH_KEY',  'ck!Bi9LX)-<35NL2@C7y _4t7w$;{EP),JXOL;Qoy2>=BIyam)UZ[)(?e*F;-[>p' );
define( 'LOGGED_IN_KEY',    'pK9Ej-ig d_){;`AeV_?USt-vn[)kx>ac=qL2P8,zw;3.l4]GRB/RGF`9T$w$$a^' );
define( 'NONCE_KEY',        'O</q|(Lz%W!^-%??r`qTqA`>riztV[y/+fiFJGRyMr^`dQRoCjk,,Xf*-6[bz(g]' );
define( 'AUTH_SALT',        '(3?3z)K8FM!!et$3K,bV x<5*9;PSdnNKzM{Z!7j;WLXh5uH7oBAxfR:?[(L:Ex|' );
define( 'SECURE_AUTH_SALT', 'T+E_y))fbhnv?a<Pk^?^p}?DMclQQKJ;{.BT ti@rK;s5+&6oFs6U6xGENY$[opU' );
define( 'LOGGED_IN_SALT',   'Q@dvjxS-qjSjM1D[{PIpRlsGY En)Yxw~BYy~{&bxEw`9ZwXD{;@`X2!(`Yp@l]R' );
define( 'NONCE_SALT',       'Zp7#)Bs+h6E@(?VZgBXI5<2g_^nN+`BOB,S#^o#RzW={I@(Sq.:)NTb9gHrqK703' );

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
