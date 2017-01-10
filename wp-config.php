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
define('DB_NAME', 'palmsscdqv_db1');

/** MySQL database username */
define('DB_USER', 'palmsscdqv_1');

/** MySQL database password */
define('DB_PASSWORD', 'bqH9eNnrw68');

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
define('AUTH_KEY',         'I!{2_2#oO8(_}Nw:F)+hFD|p2hV^>g9E5x`E9RH~SiD3A}F}pYhxK.,aBu@@?`-@');
define('SECURE_AUTH_KEY',  'G^tp@n1?vBkt3=QZ)WjOX>Ov!k!deS^:B=[pylK/}.&]TCG.o;I)7K(~ysQxRZgE');
define('LOGGED_IN_KEY',    'sy-fi$`@4TX2(QEk>A`tyIzC]k_A2S`[6?f03;m1oyDDU94d3-[TZzcs37p!#aQH');
define('NONCE_KEY',        '#t%SC!-kgX}^#a)dtp6}*1L2HiD8#nk)chD|VC_{#k5mS2Yy21tX`moNa[KP:e(0');
define('AUTH_SALT',        '~l?CmRp&!;&O@>nb8)fZm[}E`mE(ksP5%[T3Ihyy:k}>L^,(h,c|7Gjow~ 9M4uZ');
define('SECURE_AUTH_SALT', 'OyV1=,c!K:X4Hi-5HCe.&%B#0xFZNk>^H 3yI%dH0Bz?;d8uWKlRI 8rQ$f.3nX:');
define('LOGGED_IN_SALT',   'zN?[ZB3-J5Hm_/s&{wmD0=k,2@eD@3s3R^NFaWhsFJLSU*:d-s]=<M*]wXf97x1k');
define('NONCE_SALT',       'GeS`|1Z<tcp_UlyJ9:kP~]`-5L87VT:iaRb7s{0P&_t|r3v.`TzQ1KCc;YDum9vP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'p4u_';

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
