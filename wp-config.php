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
define('DB_NAME', 'demo_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/xHF`Z@,P2WVm9}pmxN>m@Qi53%Tujs{bPVc0SM?`0]sD{zknC<m(0fj^N]LV^Ys');
define('SECURE_AUTH_KEY',  '3dL)&.~MIYYbRKB)(`j<<FwvGKy3I*|ESC2pdc$WJ&e7kh6_ymo!h2}T<b3X,j$G');
define('LOGGED_IN_KEY',    'IX?W[ab0v9JsIST4x=3$/[7,Ktjw~Yt +3VJv<A1NS*iwE_lSwy7BJ:SQ7nCzW(!');
define('NONCE_KEY',        '1oZK|/TaZijEp`,kH^L}u<<_JLsyZImY#~/oY~@!vx)`g/)SnPQdSyXyMyVPwdR-');
define('AUTH_SALT',        'G8||=);t#XAVURiXD3Wmm$(Ft?DY|&%%bO+.mIE|/d,yhH09Qx6H(wi<+lrQU:{`');
define('SECURE_AUTH_SALT', '|gX^@^3v=,CiZ=|nu=:n{eF<;+p!#BtIGHEv9epo7vp~lih3xjuN`W`@c8U.f[{7');
define('LOGGED_IN_SALT',   'A&>8)4|+{{|q#33p_@rFOs!8f265p6JQ9TmzTLyl5lpJ>]JE%RyOMa+TOPwJ:5Km');
define('NONCE_SALT',       '1~OWy0.UJ5_tijN!6<MK6^A<5*Fx/tHuN4yBPS8gW_+jws,~h4K#fQKI f@YRrm!');

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
