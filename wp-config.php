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
define( 'DB_NAME', 'shopping' );

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
define( 'AUTH_KEY',         'T!t/6K/Gj4 5UD#d-g/;!-;hc!r?pu]FI_ERaTCaP,/`q6I+/6|T6|>l/n@, #7E' );
define( 'SECURE_AUTH_KEY',  '#*PrBmzDl~*E[8zL{WQdr+ 00A!vrwHX8G;q/Sg%%SBZC&~rme=aWz=JAT#0a#-l' );
define( 'LOGGED_IN_KEY',    ',)_3b Va+Whh9W?d7|7$@x)>m(4z<glX:lzN+%R#|~2/1A=??4%b an9&e=QM<;,' );
define( 'NONCE_KEY',        'Dba`Hh>v):$gb:_s+AGz#/=EbsK?0H~hqYAD=(iw4XxFJ>6$X0e]vbnv+DS2.z4f' );
define( 'AUTH_SALT',        'l0u{A.PQ_NrsbkMUZ|%`>$:AScY2oRN?& lE?J!=I^z}2Lm<NS}~ B.mjE@ow_$z' );
define( 'SECURE_AUTH_SALT', 'n[pN_iDrg6d5W/o(` .Y]jeG5M?#JdMev^iTS//13W<c2k:NOxYpW6:AcRITlu`3' );
define( 'LOGGED_IN_SALT',   '~[^u+PPJ5a 4x|<QnX6]_Dca1%$j3RMx[C9cU6(O3qgq+j2>26Y@ ^oa+17o{ZP]' );
define( 'NONCE_SALT',       'I&6#`}0WN$;8O%6fQfSvI`2zX./{ey%vqY/.=F=6]5qa a-E{>$V2T=R0tg0fe|V' );

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
