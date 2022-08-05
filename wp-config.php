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
define( 'DB_NAME', 'devpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'P(Kj.&ujdBg8.Zfn!+^``SD>2I!u_T`-wP0Hi.);b]Zo*Jcl>Nwukz/Px@Y|GD>(' );
define( 'SECURE_AUTH_KEY',  '6L0qlH(:L,_v*lo>85[i]x8mGr?Z88JLX}%CY:,fi!~=>SD6<<%a~OmkB>jn$>@m' );
define( 'LOGGED_IN_KEY',    '1-W%o7e}YX2&K3wCpW 6iYo.U.#V`H%D]11?M8P~Dg0&Bc$_Ri:%wqVw(<ZoJ{N&' );
define( 'NONCE_KEY',        'Ah(z7$2<::.mi`4zT4NfzdzK!o#Ll<s[Tt<+=57E~(R5w8 V)ZIE>k|1KY)KDBlV' );
define( 'AUTH_SALT',        '&8k6p$/`z[/;P[bQX--BsmtMd2>c!B0$)7CMyc~^=l<mHv:Z26h9m_((lF^uB,!L' );
define( 'SECURE_AUTH_SALT', '^s{m$]fwln~wBk>Rcyd#LD<%{}unXc*yp19fLjq3$nruu89~-Y&!#VP%VN)kL;0<' );
define( 'LOGGED_IN_SALT',   '4%JEuy%3,4ue5B!}dE[(n]cZdyXy3xb|+q+m*woru.G:F]ixvYs ^zbX6e[IZq&m' );
define( 'NONCE_SALT',       'NPYaLKh{6c>Pzpbuzfq!^dgb{Ga=rm:cKG.IlB()T(i3:76ht&T7M*3/f`_g,P}7' );

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
