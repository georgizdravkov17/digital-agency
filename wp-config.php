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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elementor-website_db' );

/** Database username */
define( 'DB_USER', 'elementor-website_admin' );

/** Database password */
define( 'DB_PASSWORD', 'fiorapower1' );

/** Database hostname */
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
define( 'AUTH_KEY',         '+cH)d@!{BgW/$Hj-oX~?-.;h?6-?hw`Whh)&wBIPn8,}4t#F|Kq1jTKo#x^;,JuT' );
define( 'SECURE_AUTH_KEY',  'M.5rCAv?PL?:%KED]%;x|LB{i>yr6L/}CbDWXb^XD$ukxq^Xw??tICu~T9u1b}OY' );
define( 'LOGGED_IN_KEY',    '$W><2D>Jvws2IQE]@W{ZVQ@[#P*cSIB[,Dmz_`qJOXiVub+7MDH4jK}!VjWi(vaW' );
define( 'NONCE_KEY',        '.i`4=]LrF1T7 Jnp%BhfE-NdN^&V)$JQMqDg;~`J(MNW*2adm}>95S(9fdZ;c+^a' );
define( 'AUTH_SALT',        'Ga}]LSj/06p:f#&QKW1YM@6?L.j-qu5ul~HyMr*h/[ UBurr]$xrLIib;(R:h,f$' );
define( 'SECURE_AUTH_SALT', 'f+)o0 zJO{[ cqGDjw@g5X,lcaUO]ulq)!Oc07nr~?r ~@^=+ZP1{H{c}W<t{dTv' );
define( 'LOGGED_IN_SALT',   '|(,rL4xnmWd86ynu0b]Y]X(_{DN]5w:dXABeXqUCA:U_;1k9}321Uv*R>Pk8z4Nu' );
define( 'NONCE_SALT',       'SVXTCq>Xh|a8:#aY Pr9#|uB;.k%I{[{D(c4Y`g&U^~z3`$RH67_aX[]z<>,2yI;' );

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
