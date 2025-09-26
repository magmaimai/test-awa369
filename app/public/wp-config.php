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
define( 'AUTH_KEY',          'Oa.o9hx_8_WPt.L?fTK#1N{c&Cs54b|ur2>PhsnE#X$f`YgX{r>|8kR lJKG[RRy' );
define( 'SECURE_AUTH_KEY',   'jgJ#op)yIz,s=LB|U%A#S43,/C59P1I)HV/_r*ymA_>p,L^~s*WFIWALF6[KLYpB' );
define( 'LOGGED_IN_KEY',     '*jn8yG~k[eq=P:uz};*>H:^RT=&kSD(A]q@5{nM4%!n%``-p]udqtjc@CRx,aVf#' );
define( 'NONCE_KEY',         '8?Yaw<zZaU7}4 jQz4tZI!qH*u)&:I1`-o/f~wcTNOs,&K$foo[tOTjn8W{l#;<v' );
define( 'AUTH_SALT',         'cauk#A+o!n(?zhK2#/wQ{Sj4s6z$0<{_Nl)Y|qGy4vD$5J;Vy+38Q0rmh9#u+(O[' );
define( 'SECURE_AUTH_SALT',  '=H@[MbDA<)Q$yY{HmfTttnX^]&]1 f ~EK4HL<%w3+mh~3%;dnX&wXX>Ak[kH=EX' );
define( 'LOGGED_IN_SALT',    'ttHFgAM6EJ4(#-VSCi@nIY,b6UO0cqH-@lbG[ji g(ROEp(wLcKj),G^@2.v mnS' );
define( 'NONCE_SALT',        'Eiu`Z!iz_yyi*l|Iol_]h|:(5G$H0( Yzm0y>`V.VA`*;+$J.LnAndZr8VmA)>%E' );
define( 'WP_CACHE_KEY_SALT', 'ArvqYJ AK5:a>$}nPzf((A*_1RD6G(eRFcc#p ]4)Jo2qta1&r`!8u<Q>!wfe{F5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}
if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) {
	define( 'WP_DEBUG_DISPLAY', false );
}
if ( ! defined( 'WP_DEBUG_LOG' ) ) {
	define( 'WP_DEBUG_LOG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );

/* That's all, stop editing! Happy publishing. *