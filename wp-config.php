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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'icon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',sDo#c-}p[Q2iJ:~^DP#|(.GdX)fu49gkVJ+TsY2ni(&S7o]W|$(FO8dl%An)JuC');
define('SECURE_AUTH_KEY',  '32S7}pXi_WRQEOq{R-dRkYl67SEn6K}?rhGm=PD!z%C7Aqw+:Tvwzv?p|?^k;lJw');
define('LOGGED_IN_KEY',    'iS<qB[|K.aBw:!lL.C< JH4~{bk1H@puLUdiL]_ r}m{,j(tFhvLtk4n,#[V*WpN');
define('NONCE_KEY',        'tN9VG/?=3U9[_F;8?:lf>( BhBs)::?cT[[ h4]xD-b|S54Gyw(~i~]plpR$:^2w');
define('AUTH_SALT',        'ZnPG?>mdf,3}Ir]i&K1`EK=%EQdZ_de5ac,|Rq?)g=i}q2`?#gaeD:hWx)Ti&ceu');
define('SECURE_AUTH_SALT', 'T<g+GTaL-D-A3G3qnjl#mBxDDK9W7~(D~?XOZxAZ.cgibct;z%2YQ+k}c?$v0oQK');
define('LOGGED_IN_SALT',   'Rmsr[CAQyT@T;VwlxwljI{;|y *s)ZmcyzXDRne5lpq)A?1Lp1nS&0+GEG(_s P8');
define('NONCE_SALT',       'BkG0#*~RD-`=FUpK[Ax5cHE[@aUBkLciUd0/haj[_+,(C.aBCspydVm]%M&Wt~A ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
