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
define( 'DB_NAME', 'dellprob' );

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
define( 'AUTH_KEY',         'vGu1VLNBU]?mzim{T.OThuf_UV-gxH0moe{en,?nu3-nOZE(_r4]APHi.DFl-/g2' );
define( 'SECURE_AUTH_KEY',  'CD?|~q`j5kGs8>-b}(#c(oP!RPopZ8BZ }8 YD[w?=iR0;NC:_$cQ#}du)Sc:-!s' );
define( 'LOGGED_IN_KEY',    'M_1Bx,_*3[JsWFB]_Hm4/Q|H/{nye]HwpsA ;NZIk+vxN]/Y f3Ja+s:nA8w|X{t' );
define( 'NONCE_KEY',        'vv;(E<Y,)p=1!_[tV3V:3!D:qo HAC:U+P=M>m0^/4?7Y-I]_3DGa1;6Vg]B(&BQ' );
define( 'AUTH_SALT',        'R`{,(boNlkh2/bF8y5;2zi{VtalRo3,7#RTEgV=B-X)} :@$v}*8%Dy~9F}#C?+n' );
define( 'SECURE_AUTH_SALT', ';`-oYu;Z?I#}3`cHqwTD:EC[j`FC5Ji/CD7F1[puL0>mSX.:^l/,& jjBpS2U2~J' );
define( 'LOGGED_IN_SALT',   'KATvg~x8<G,0!AD#;m]u5]oz@VA~]CoD$=+_SF?F]B8|.W:_(IWqwHqbyDgteIYz' );
define( 'NONCE_SALT',       'pfU`%I}%U~fTmbqcRD<HVMrG^;u!aRn2yag7%3j`0]W`}j:xPjzll3BLdkYyyvK0' );

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
