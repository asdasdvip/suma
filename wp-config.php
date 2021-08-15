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
define( 'DB_NAME', 'suma_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'oU-w/3Wn5b9dW<w_Njtv+b8zb(__n$?B.IoNR|SZ g}um;<If`s@LNyRS_]E__A@' );
define( 'SECURE_AUTH_KEY',  'f`R4Q(EX>fAlC?I,XT5,cwW6*LEf@l*dCPrW)tM*Ra^Z)Y*KP>5or2x!dJ8{$P`h' );
define( 'LOGGED_IN_KEY',    'ev_,rL1![;9yGn*f~9u7[_}Y ^t5*pi[tu:bH12fm3taFHhFS~k@]i`V b8Q25jj' );
define( 'NONCE_KEY',        'nT_,2De*&0tBi8Fir]z]CB-<}i1oGs#8QVq16J}Fw$TxVY?AFe%}jORVD_38Ob)Q' );
define( 'AUTH_SALT',        '{(GDgWD,=^5dz9@Jh,5z$*(5*^G{>v=v=2KazoCKjT|5F0EY!c=teXsVZf2K2uv_' );
define( 'SECURE_AUTH_SALT', '0Ee|6tef&8:m}^0e8SFa fI7+|./$lDzim7%?>lJO{Owx5B|f]rOusFO<[~*/irf' );
define( 'LOGGED_IN_SALT',   '@EWs*K)$wzJ/F#ZKuWfb3%F8y&m ,|fR^*rUM6K48]7IS<@h0f1CtZHI7d:(XIQ9' );
define( 'NONCE_SALT',       'vz)tV$g|z H_uF+6xOW)h($bM/=mY^a+U^;j{g$A#c=,mRiyhrE N_K< 5#bz?,K' );

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
