<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress

define('WP_MEMORY_LIMIT', '128M');

 //define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_DEBUG', false );
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'c3659456_360tattoo' );
/** MySQL database username */
define( 'DB_USER', 'c3659456_tattoo' );
/** MySQL database password */
define( 'DB_PASSWORD', "luis23859240" );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'sKtT->Il]][22jy&u2c}riP) GrYJpIg<0&+GRpk@v=Lcb[LMb)CV|X2-J_hseHw' );
define( 'SECURE_AUTH_KEY',   ' ]zg>UuHv?]3@3GE_4@w=w-ZwXiDKFFjxl;WB(Y?CK<Bzu X{.p35jbEWA^~UtnX' );
define( 'LOGGED_IN_KEY',     'F%1a,<4im ~8U^W:~^AH@AFTS]-qcc~Fu1DtRLqO9cvG+6l3gnUlBLo>Qw:!s.JV' );
define( 'NONCE_KEY',         '[HAn,ZvGXY.4pl:*_$UfQhZ3pF@OKbip4@k`sd;nW}Sb&<SHY4OX `)1n|4ZLi$D' );
define( 'AUTH_SALT',         'fEKWRq7yS%M[N-!Q.^1?cux^7n3w4w9u%RBUGq-khWYFRmJWSVLO.pZb.;Am&JRe' );
define( 'SECURE_AUTH_SALT',  '-MPL4WA@$Ti&Y.#;S@8|:&$Dwu9FpO%Q2`Bl(9xALy.l`2sFl;NP=Q@dc;N}~sP+' );
define( 'LOGGED_IN_SALT',    'yF,6vcf>zNO>KZ@`fyPx5GKHYSO(6gQ!2Z4f?Z?rI;~zS;nnxaoRU}F(Uo,M:{@0' );
define( 'NONCE_SALT',        't_[3.30q)3_+ y0P(v-_>0ivucO?f<*IwWi&aP{IMdg6@4JP++U~prD`5^_+hKku' );
define( 'WP_CACHE_KEY_SALT', 'mMv$Nl^72%~4sPq{aL96l,o3l$U:guGRU(`^k_Ff}F_9L]?hoE9~a`b`v&t7H}b#' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
