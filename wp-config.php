<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'QKA{J]e}!!PP$7%!-|n+Z)FI_QyWf/jnS-^zt(ppxClj^&#78 _S*EA[4)ut5*i.' );
define( 'SECURE_AUTH_KEY',  ']W8@gFOB`QiXJMLr< (C[kIkLV3/CFVe9vnx>?^Mi$0z7eTTWmue4|%GI~Z_k`b<' );
define( 'LOGGED_IN_KEY',    '5GSmIyG{i4EUn>q3vY4X9gg?ssI_ $%vs(c^q+S+GZ%hh~.$hWf/2h0rIFQKP28$' );
define( 'NONCE_KEY',        'LlSO2Bub*j2j&Pd<gzLdDWyC:Ae~+77;6d.6L?2_MGf3&8|=scmB><=wSLVZaQn/' );
define( 'AUTH_SALT',        'ZgwT]&][tCQZr^]L@!4TR!z#Dbb3~UO i3vnNHav9[FRD741~LHo(o<s-~:@%C?P' );
define( 'SECURE_AUTH_SALT', '+4<SISKj<40/4L.QGW!zAQkCpoG|rPmxna)HR@Mu}XTT2:*A<P-)GOr`OW0v6U`1' );
define( 'LOGGED_IN_SALT',   '(!*} `.Z#Mb=Is{?[~>]##r?iA?-,/VF0>t;Gw=9IzpZ()v&I>vSWM<fYdB*gJ!l' );
define( 'NONCE_SALT',       'FO!B)T9[mdl*+k:_:skzC3m2AmfABDK7EnzFH=,)#^mj]PGun?sh3-155]jey]V>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
