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
define( 'DB_NAME', 'fadris' );

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
define( 'AUTH_KEY',         '<55AMPBW^(+24@g1~{sB3&_r.OF T~|{%my2sB#bo{td8<q~i+m_|{!2!i%Wmx1{' );
define( 'SECURE_AUTH_KEY',  'F#:GvgO%lb{]{y]^i{AJK*{Dz}u[MC,M/KKPoKJ)Z`k1iFpgr! g86:uFl*>,CBc' );
define( 'LOGGED_IN_KEY',    'z8?.[ujp[j8Htx:j%d3d$`.^K.<QL;Z0u4D$~kT(;#T_HWF:-UCx%=ij):6-9^~d' );
define( 'NONCE_KEY',        'nl&b!zEhm`2E99q 7=yScx?bp8HrP6HqeD<A?&pWO|p_w1lfxhHwZ>^{MAmcNzP!' );
define( 'AUTH_SALT',        'up.2<*f2Vd:3ewff1c^q+k.(i`e%Ey#5>lQ]jM[9DmCt@[TSy%j^20F?XR2w-aS*' );
define( 'SECURE_AUTH_SALT', 'kPO*A--`<a0Yh_sL^fY4_*4[z]wqsKB:Bx]-X)S fFxE:])CuA:xE9P[g>I;.)]I' );
define( 'LOGGED_IN_SALT',   'CM>)`@^~#gxL!FZu `T<~R2!2{;c|oOhfWt,yI%-U*ut`|]sA!DK4NQB+_k@CRJ3' );
define( 'NONCE_SALT',       'os}f6X*q4AS7Fbso,,s=m@Om_z,E/auR]w_-{<+syd1CD>Qg>6jXF-VA0J=;-Nb&' );

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
