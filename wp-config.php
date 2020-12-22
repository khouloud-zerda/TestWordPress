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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'eJ>a*N)(we7wsCd2;&)}.Zl$%4F$u=[2M4J0EY60O~A.54RpZZ_IIE8= rRUZocO' );
define( 'SECURE_AUTH_KEY',  'uvh~Dw-oUS=:>8MARZ4*!};_b?Yw6k&_zmNZ@<1tMm@ZL}8VI4%nXm*lDXC-i>Xy' );
define( 'LOGGED_IN_KEY',    'WJ-^UCzeInrj-^DKoaw9>zsqY_F@@u-Xy^=GwZKzp:nMT5Syoya:V(-yuIfn=.xR' );
define( 'NONCE_KEY',        '_ a=}oL|,=sTD.<Y,$oJ5c0n[sc.Na0Nh}%q--yV.NRc!bP}qDs98q+ AD`9eL!1' );
define( 'AUTH_SALT',        '@_K0^>9|+W]Z~3s x,ii9mMOB&{ux:LFeGtlO`oJ!R]{jqZl ~+e7k7K;Q{@nK>Z' );
define( 'SECURE_AUTH_SALT', '2c@)vlo(+!YEMxRV~oSxhB`D<,:wA{!ab3-Gb~#WF7jE:*jj[FR dFvz=u*{{]Rb' );
define( 'LOGGED_IN_SALT',   'fl2|gx?^u=(NBt]@rhOSNkfjmHH{t(ZVl8u{Y&i7(JfY_#6nkx9%%NznVHZBTG_S' );
define( 'NONCE_SALT',       'l2CzAMe-n=&>nQaUY12t$;@|sVxpp^1j/gQyn4B7QX*cUI{Tvmdz37wA3,zm cKH' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
