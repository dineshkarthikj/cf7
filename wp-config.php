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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_cf7database' );

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
define( 'AUTH_KEY',         'A/[cBD];@i8Q;v](mA__PAy.] _Y$<FwZ!R?q65=pVEc&e7/eI{P vE~F24$/}`#' );
define( 'SECURE_AUTH_KEY',  '6reed@3N+;4(|hMlU0,g32DE7}=g^ZzsO=Ezg!;g42<1|ARd~_P.zWZ>LP+Jq:HR' );
define( 'LOGGED_IN_KEY',    'mtF+7y[dx!pBwF-}{h]i`tf*|UKNxZp/il9R|Z%&.9Rh:5xV?QV]O4@t&YIH^iVA' );
define( 'NONCE_KEY',        '$u;F:V{58X1!pn^~uBM[[}su dUA[ChVu^YZxl+YZ^iw)_9JFK_JAG^&RA#<[LN7' );
define( 'AUTH_SALT',        'zHT!KC/|qKkbV}0x%6[oKaVogc<C!jWyeLUa#Qp[iv-.&YN47 fJ}{L6_*;r{Y6 ' );
define( 'SECURE_AUTH_SALT', 'XP*2|1x0$rN@+(F[r<1GxU9[&A)Vh$ix^1us>uv|JT!U FP}x=JhHyGl{Px|3,S*' );
define( 'LOGGED_IN_SALT',   ' Vnec8@G65=sF| kgJC98y3l,7{M2|v+K{*1|%c41@8*72?;u!R QP2AB=*!3z&0' );
define( 'NONCE_SALT',       'D4ufY68H9I>ZpBJ?HYAE3J+MX^[O? Oo^9!f._F@6B:fL_g0y%>r8>fixe$g2~2y' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
