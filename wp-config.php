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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'mY/7-Y;hw1-Tu?A|{@_Yo4`(*@-^-R?J~/H-1<?d]EkS/qz~mndc0]OK^zbGapE/' );
define( 'SECURE_AUTH_KEY',  'bY4G<4B#r+KrGEixd)cJy:Jl{3LcWmN7o>@%g@} Zd;%@7QLU(wTRD6Dt?><MKmA' );
define( 'LOGGED_IN_KEY',    ',E9u#A$D%!!f|/`|BJ?!Rxaw59_59BNC+@<m$iaM9|U}N`P;t-ZYz`r.~,,n7Nj9' );
define( 'NONCE_KEY',        'b6<xCb*9J }wE7Pz[)1a@~n?>!E_R8[HFAd=Ne%565Ts@|B}Iyk=iqVX8Ui^86Az' );
define( 'AUTH_SALT',        'y)|u:^4St<jysAG<aF3G=QxSS_ZsJLr[M@Yaf~UhQw;2yF#|7rrj2$B-QUM9B,<?' );
define( 'SECURE_AUTH_SALT', 'VHWK/+v|Vco$Ec:oSK(.Ef?}59{)f8Lhe/PNs_.S(Hf($u$pZ3winj7&Ru%unR/E' );
define( 'LOGGED_IN_SALT',   'hb?*Af`F1i/bw*YuAcHJ>ZT9N&&$7b$w#Hh03N9(;R[`EJ|dto*QtaR6Lzp[,wcN' );
define( 'NONCE_SALT',       'v}s%6In?JgN.+g1AdV|1 b-m9Sg0~2+X64dtmxAb`a>8[Xc@i}=h[am2VTWE}v.I' );

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
