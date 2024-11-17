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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Z2eN?BT5}+j(/CZs&NJtI8SI:<aw+):.({0]f7t]VLjGQg$q<z2LtF(x<OZ2DYB&' );
define( 'SECURE_AUTH_KEY',   'BH6:6BoG|Rs9U<*i@a.? cZ6DitbX{q]6E[V*{ zI)q@~MMV>lD]tZw3|L9H;y9N' );
define( 'LOGGED_IN_KEY',     'x)2c%WJ{IGdsv$BjA|^;s7Nt9N*3V(V(ZDI<(5)pry/^SGepW`P`TC ddrL/%ufe' );
define( 'NONCE_KEY',         ';[+!;)Ri|G:NCD]*d%N,%@,q6^;B~,3@^TJndy]4,@~NgJD[{.:N.Bc(0&ZyfpV6' );
define( 'AUTH_SALT',         'rO(Z)M98q,fMcr*I9Vv@6aB`>(Dk0NVZ{v/9+N7cHB^R>m5=qr4}~+sBGv]M:W}L' );
define( 'SECURE_AUTH_SALT',  'K49[VOJFf=#jW9Ol~Up<(?@S]osO*e(~-7c4y+$+,vqcoN5?fW[,/w0CwQ2!fo0`' );
define( 'LOGGED_IN_SALT',    'qb}Qfp>`fqW)euv1adJ}%,_#fTgAY|([WWJ(o&)UG<+y%^^o@0+!6K6s,bIZNh[&' );
define( 'NONCE_SALT',        '*j#}=6[S5KH&tM!c?imnRCaC7% $}x+kdA#HAH7hOck+kG0,Fo$ojOz|EZnbCb3(' );
define( 'WP_CACHE_KEY_SALT', '[]gXQWi2m9=r]Fn62F_56)]gxf5F|iPhBpTa+I:_N4W_WG//65x}}ob)t9$YY{!@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
