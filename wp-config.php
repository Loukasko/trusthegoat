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
define( 'DB_NAME', 'trusthegoat' );

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
define( 'AUTH_KEY',         '#-Mh]7G&$`:8zdtK^$Tp`aw)h}Mm9._zYKg$3B>B8&wLZ?)F}jF RY2oPBhmymW{' );
define( 'SECURE_AUTH_KEY',  'Kn>_p,p})D[:TVFcXz]TKZ,05g#>@Y%s{)F^Hvi`Ci9Uu+Mli1)-?.!:Nn2~sTNm' );
define( 'LOGGED_IN_KEY',    'Tp[zybYe>,o;X/sXWnvvC|] LhI4QcJsL:OUmPDQ{<&FHow:oTWYQD@4,Jto8`F6' );
define( 'NONCE_KEY',        'X%$M%W#f1fzdyZyq3-!/(QQ=KpUh,?DFJZXdz?)| sSo]tU~MopTtiC/f=RxqPs~' );
define( 'AUTH_SALT',        '#50dYjvE*W):2JFSPoyu}JF1#<_5iR{j-Gr)e7BQVO13+0!~q,P92L9.VsUJ;fs;' );
define( 'SECURE_AUTH_SALT', '$Zcw#R/j<J~eTo4<Ct0a/IfD1vG<<[6;628kEidjb9~d_6iW0GA~_bDqwl*a.,,m' );
define( 'LOGGED_IN_SALT',   'FF$ijSR~c!u}^j;F%Sb{i!.h)!]w2AYvpt%{NR5~Fd7o<~W6t4[g!C Z]ab;<zlw' );
define( 'NONCE_SALT',       'nm<F[C0/hto#;M9QdmW`}<vpq|#rPV3N[Zr0A[`6a?5*Jv4CMpUol^beDCzvUTFf' );

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
