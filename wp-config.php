<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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

define( 'WPCACHEHOME', '/home2/hovanpha/domains/hovanphan.name.vn/public_html/wp-content/plugins/wp-super-cache/' );
define('WP_SITEURL','http://hovanphan.name.vn');

define( 'DB_NAME', 'hovanpha_travel' );

/** MySQL database username */
define( 'DB_USER', 'hovanpha' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rt74NE38ckCw' );

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
define( 'AUTH_KEY',         'PJd55iide=.GGq^fE!(`4YVxyH7E(1 6^d_(k8)g~:kl]0gP4Pjo7NV^:67o`D}1' );
define( 'SECURE_AUTH_KEY',  'WiJfJDe7qyP=1@v3pI[>mEE2Xq,oBc8#Q82rPP/2kGVcWWSoNjFke>svZi7H(aTu' );
define( 'LOGGED_IN_KEY',    ';:S/1;U3,P[zwR4!J: Oz`][Sw|<rs_bw7W=DzEFi/PxaVf,/SQU7X71>Xn+ &{0' );
define( 'NONCE_KEY',        'NyBDz]C?#v]:Pb0m>v~*dBjcXaY)qFM(%R}HJ2n9a65.+@oe=J|d,nUf+#M8_Ez>' );
define( 'AUTH_SALT',        '~X!v.3z3V$D?,nHA9(%~@ [|9z`qy.C&_ku>os>m!:e+?Nw #nAt6xVBXT`$ 7{|' );
define( 'SECURE_AUTH_SALT', 'tO*?_&aZSnX|sZ!Iw68cIyMQm)Ndx)|_Y|B-cA!`z~%Q-enP*:p|)7`9soIzh&<8' );
define( 'LOGGED_IN_SALT',   '&vo6 C9A]cwj0D85:^b{ZWx> ?D<;h{F;;a/gt-fzo369`Ka47l!_T<A[Fu|/?%x' );
define( 'NONCE_SALT',       '#%CclqkVpR=t`[+T$9.-mU`sF(%{.wA/>HF^[)4JucoGECYo|vv<O)&^:&S[`Q$=' );

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
define('WP_POST_REVISIONS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



define( 'DISALLOW_FILE_EDIT', true );