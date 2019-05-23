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
define( 'AUTH_KEY',         '.i>hbqG~<2~@j*!s/$${hMM~=K,JbR$FJA71-+jQkLKW2]+?g|fjOu~b)`T7oJ4Z' );
define( 'SECURE_AUTH_KEY',  ')ogK-v#9SeK`/b#!|PvyLf.zOtjGADxT?:V]J[3t$H.<OJjcREhg7IPHfr((DMGv' );
define( 'LOGGED_IN_KEY',    'F*f3Ej(9S+WSJp_7TsKK$_Q&UHf-XKa?l+Us.L5Qh~K@0$GHJHy`w+Wnjsac[zMs' );
define( 'NONCE_KEY',        'C&_40_Aw8_sEl7%cteZjmh3;2$4log!7,Q_IC34O%44TW(1r;nSUS?)+&?(6y.ts' );
define( 'AUTH_SALT',        'h=u*nJuVg)S$Q:Aj?aIb^BlS>Y?>05_p~OxSsxQvwSG(Qi 9s`X&8kMuBIB.&X)r' );
define( 'SECURE_AUTH_SALT', 'EOuJb*c]^6L _[LjEh8c>CRG!n9[3Iv:J&^j>W-rn.`4P3-df`XDqH!%,@99M}eR' );
define( 'LOGGED_IN_SALT',   'TT<g[q:|G5u[/Vo|D^sGgFq{!E?ndD%J},=?Jr9HI87JtS*zb=4~EA}DB..);#t*' );
define( 'NONCE_SALT',       'pR#HIq1elb%a^Xa=LPt1mQJY*tH<]?J~YR^}`|yaG&`Al=(Bz,X|+E0]uU,XL ~]' );

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
