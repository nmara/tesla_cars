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
define('DB_NAME', 'tesla');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'coderslab');

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
define('AUTH_KEY',         'e pQpf4`LP6 9mp,X5_x&)=a:f}?F&FeU6nq2gkI]d5d]wYcXsZ+!7@}@sXBq0^D');
define('SECURE_AUTH_KEY',  'znVDDKO9+x[)nc[^7Xs Btp ~z4oQeMo*h:,q-i[Q%a-cV=+bO&48U0X?${fK|*`');
define('LOGGED_IN_KEY',    'i$iT/86qm=.cA&0!{!BLl%,H+l8Jf3Bh{_eU`]l-|Xspe XHd`O^tG2S9yMnQ>[<');
define('NONCE_KEY',        '.^)I2}.;ko/}!2QnLbJ@[~Lvg.;;tm>^@=e=wiX7u{|VteksqjicSxtDJGgyT~q,');
define('AUTH_SALT',        'z|k,Cd/Ak9s1r(2xIs@>S*8%Q4-m!(uy[Fr-X8-c{W?[O+|GF6A*D[LzZ0T5I}Eb');
define('SECURE_AUTH_SALT', '+rT,JSIp:=or[J`WaqO`tV:N<$gF`-Esw$-!2~7W&)1;F7oJ<FU?{[_?:WLa bG_');
define('LOGGED_IN_SALT',   'J7E2Uo>+C~t8IF;/QZ;~SqP[C/@=WB:$[Y7U}Gt}yWo,xEmC2(/I#QLB/NTUvGwl');
define('NONCE_SALT',       '(F~2D]dI`e7^Yo1EZ ii6aEx&E#CWaGauP*L]=QMV,1btj!5,0)v+_M:^&SO.L:]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_tesla';

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

