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
define('DB_NAME', 'amosradb');

/** MySQL database username */
define('DB_USER', 'amosradb');

/** MySQL database password */
define('DB_PASSWORD', 'amosra2610');

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
define('AUTH_KEY',         'c:Fy%~{R,{WN6jDG4)*HH yD^xZHH3L<rRS$8^#+:[Lc;%-RN}.|Xz$>HI.5W.cI');
define('SECURE_AUTH_KEY',  'srZ_JqqMzYO=E!:zL|oO::4)g[N~whLbn%0$PWP%2,7[naWKU2QT^%Y<sjH3=$!u');
define('LOGGED_IN_KEY',    'U}e-zrdhQO./#n9SI5.A5e%}eC?((jkLq}ioy6b}%d{+>Nm9|; 5fM(AIsmS5K}R');
define('NONCE_KEY',        '2z-x?C2i0CTMv++iWOK5]KNMQVez.hkx,yYseH|^]PWH!}`D&FWXMU7K6HHx0RVF');
define('AUTH_SALT',        '|TBC1-9<-bzg+.t0bT?eZ%$Gb7$nu*rLPHWbM0 /8n2p4JI!<gUhuU^<*m%1k|(q');
define('SECURE_AUTH_SALT', 'USgF&|]Y@]@+@:LfgpX9yeS&/#)Ry_o?hvI( j3JT@kBy/c4ZC)a!odhwzYCa.aL');
define('LOGGED_IN_SALT',   'H7tkc:1j+3l|*{~Ze5eBdB{TTTTVFL`OfO+X-/U+]._y67#eR;;X7ho=uU3aa4n2');
define('NONCE_SALT',       'r0I9f&ffn2r{YPoVht?hdsFMK}r NNvZ`U0f&<8`6MfJqJX(|T Ns@p0AY!,zRnd');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
