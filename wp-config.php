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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=ywYf?_aSs%J/b-v}g|Q;u2,5RxQBk4UGS)a5yD^&1W^#S2uTqS7|eh<o@rfcvG`' );
define( 'SECURE_AUTH_KEY',  ')O^=H[ o!)v!I<7iA2h>!t}2(JtJjnhH@lz$KLrH^bYT:S:bfaaC$SjJe.awW.`m' );
define( 'LOGGED_IN_KEY',    'faBnL/Xa9_%kgUua *~b%5m/&TwMoLDlE=y&V{XWwZv~g_:Q_T %{4n@z-)rg)P4' );
define( 'NONCE_KEY',        '^[U-jS>s$Fx-b|<up7+|114aW`~SCY0R27Mmn|4^`,C(Zio.O]e!qN6~NQ?Hg*~!' );
define( 'AUTH_SALT',        'l1:OCgV]*n%}?GKHt&C7jnh}A<LQ/,=63yr7 /JHcDMu$`=}(1.N;!x >q_SX<*~' );
define( 'SECURE_AUTH_SALT', 'l<LhVHi|>zF1S)FN6.:NK5|kk5K.t_sIR=MVNe,A9Y1Wk?xJC3&@Ojy1lJrd<cxk' );
define( 'LOGGED_IN_SALT',   '!iG+ D wa6JyyY2KQaiRcf7`y2Po-VJ<ko ..]xM@T?Lml)DN6nKjw:dQv$frr|Z' );
define( 'NONCE_SALT',       'ly+)&eW`x1V4Yh0Hk3chJhmG.w/s92Wmf(@6yPT>w$^A5TzIiyT&7&Dqph@jNWsW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wordpress';

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
