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
define( 'DB_NAME', 'tasin_shahriar' );

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
define( 'AUTH_KEY',         'fT8;#RpQ`vxSEs~/1MDeQ$0~d1^UU7zVQlRK<78zwkn}(kHIL+t~>qTolS-SKlvC' );
define( 'SECURE_AUTH_KEY',  'I%<YKr4|jHY-c&tGctEK.<eusQ;`I-nRc6Q|03>8F@|s=Ou2b:$pu54Ho`W(uT~{' );
define( 'LOGGED_IN_KEY',    '6Gr`+RN+(-cz$BX|K)<X`UKnsw1M9m|]sRr_um:D-Z%MX(qvj)B)$x[(Mt30r_rL' );
define( 'NONCE_KEY',        'T]/C!~w[v^I6I$*DF{}1=>nqZ9-]{}c6lBALto7rt{HQHb~D^5%7-4z?6EUb/RBG' );
define( 'AUTH_SALT',        '8{IMDmbb~TGGXZ`jKe+If%Dl]*RZq-wMfzvyvcHNBuq4^3q<D6__v@z.(30%quE*' );
define( 'SECURE_AUTH_SALT', 'o2dR}usL-FkXp4$(i;sab<#9}h:ZdWfnhmo^7~YcaS%(tHWt%mv]aO0))AP^ofos' );
define( 'LOGGED_IN_SALT',   '>OcHkxoj:lK^] %$(^fhIq/YBG]}r1Y,1.pW)f_tlg!B_`T;6cPSap?=Z;z4+)%6' );
define( 'NONCE_SALT',       'p0Lvt3,oy~qAZf}V[W.fFK0H|xmy4^~vG0n?)HWFcsh=tC`C1^zD_;.J6vpZ%b:b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ts_';

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
