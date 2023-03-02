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
define( 'DB_NAME', 'hocwordpress' );

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
define( 'AUTH_KEY',         'iZI@!dT7ZsAEd=~bH JG>sX<NDJksQ_ddK=biZRK?z/3h#pmJ._ixbFIQx2N~qw[' );
define( 'SECURE_AUTH_KEY',  'l?Mh&GQlj)PYF.Y`J`_}:856eA*CCsYTU/]!bG[G?TzG-<SWC}}yWAS+1{y;l0^w' );
define( 'LOGGED_IN_KEY',    '@}1vg5}3);k!^tL(}M)>OWxQ.T=8$9P!XB4z-eO&spz1;Kpp}6DXLU$93PQZj.|6' );
define( 'NONCE_KEY',        'JKiYa Trcwbnhi0Dj4k(et[N2ZTsi$M,Nx^p$Oe!h^z=MdB?GJ<jSj%Ir{z^Onu[' );
define( 'AUTH_SALT',        '`5gp#>Eo6)L@5qxxXr,~tVG:)_G.T!r7KR{1(Js[#UW`ggu9ob}UG.Vr=K^{2Im1' );
define( 'SECURE_AUTH_SALT', 'Um6kW8KDTP$,ODdfR`+1KsLI8@#8gT:~~f-qPgV9CZ5J.j@MrL|^`%|Bl ,2c$7E' );
define( 'LOGGED_IN_SALT',   'U>cUKEhR]P^{~Kd|efjIJ+lle5]^!*WjH-`&113NB^on/um]tFf.[{CJM>wVzPSF' );
define( 'NONCE_SALT',       '6V*ktp)aD44AiA%J_$7Zv>R Y{e.wq|wM1H3hp+t:s<{~xzb(d7vN7Gpaij;bOhu' );

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
