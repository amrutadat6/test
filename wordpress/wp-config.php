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
define( 'DB_NAME', 'wordp' );

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
define( 'AUTH_KEY',         'SXE*O}un~B/dq^(16l6q@e%1:#DZ5PdeoA+U<PHQqK}A(x-rB!6?H44Dwp5k+i^~' );
define( 'SECURE_AUTH_KEY',  'laM$=BAk^VRQ5b{n XN7[}mgsp`k~+|yVWQ8W{D|})]^U)^Cog?0+0Lg:02{l.b@' );
define( 'LOGGED_IN_KEY',    'V@O**,dQUO7FjbvGMr?j.C@YUY$iX2Wj{p?%V/t{8OMQS7sbkTwt3Q`M-2$h@zvQ' );
define( 'NONCE_KEY',        'W7qDl}MugtdSq=^$VhrA%fHmU J4-/t6jg7V!8`ig[)%0MX?OAq@KbI>H=}CgQ,b' );
define( 'AUTH_SALT',        '8$EbB8*P{Myz9S&gSfp?Q(%pWkXN*saqWm`J/Me}]VJ<UD#[|zO47Ri{<Fs|-_rX' );
define( 'SECURE_AUTH_SALT', 'c5j )#tceX9%eVEhm7%eD>5J$vIKYZ@e0x&z~~5.1AZU{b+hy7[8/5iZv3To+RfQ' );
define( 'LOGGED_IN_SALT',   '_+C8.bNF(c +9>rU2:m ACu_W~HM2z@G} XZfql!VCZ)Fd`L)>FtqV&Wqykby97D' );
define( 'NONCE_SALT',       'oaj~`*j707OmWqjEm[ ~MFlR8)QlLhMH_{549Gkc:_K*d oKy^`jb>oa)JwvdvJn' );

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
