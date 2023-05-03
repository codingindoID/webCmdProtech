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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'protech' );

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
define( 'AUTH_KEY',         'r3g1D+$v4U33QCe5%i>OUB^BWs`sF8 q_Bu;~o9Lq?mUly/<Yv-]zW6,2Y*Gl27Y' );
define( 'SECURE_AUTH_KEY',  'U+k}e-5FL=@vk1V-D^E!]8z9 iy)m2y&8jSI}9[jiH7t;MsRJ;P52{I$6oq,=kES' );
define( 'LOGGED_IN_KEY',    '9c]xQIAx;OF1Eu5$G3)/JVc@&ip]q5[)URJ7.^cLl!H)9Slui61>M_:kJ4% Z~}_' );
define( 'NONCE_KEY',        'OVFNiQhJg4JOsvo.6tb/1nL~7WvQg;w^Pa~*`<,H#VC]a|/Rt)%Z+iTnk,.2 vRP' );
define( 'AUTH_SALT',        '{I<V6$Z.GU`; hMMyaS(b6] Qpcw05wmZ4Tqv]W_B<<]Q/_X.uaVAMqL~<@|xrGl' );
define( 'SECURE_AUTH_SALT', 'Z}8Pn(p[N?k/{XgTJQ$0Ws@eSO}+t*+|3]:+>x1.G1D%T#AeK6Plcl_3`IgefVmO' );
define( 'LOGGED_IN_SALT',   'qY~*}*b+2x3.b+E?n<jCUtB^& !@@wM5&qH]Se79$A=KHm^2ApMXQ5EwjYq[.n[~' );
define( 'NONCE_SALT',       'IlVSUatk# ]<a%A=ZowTZ%~cDGjk<^VCDP!Ex;{[CT$)*E`0^5p^QJb0+Sb_t?`0' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
