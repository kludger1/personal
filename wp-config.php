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
define('DB_NAME', 'personal');

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
define('AUTH_KEY',         '}7Ts]5k6&/bp!F7Xnx~`Ixy3B`?|CTNm=uutCTLe($Ux1X7~iFw~Idc(O O6f}(3');
define('SECURE_AUTH_KEY',  'YhU|=0P?VLoi~)ma4{.OR_0cGiV^69ZcrA!GoB*sLk?^LGhv|KZw`h%7 9<~bz}g');
define('LOGGED_IN_KEY',    'QP7}n-I-&U <3;khKZS*f!x fGN00erajY_Kj, HW[Va8_ zi/lrV9:d>DLEv1+K');
define('NONCE_KEY',        '1) P]9^[JqYN.<pGMbY9I|Y=f`{QNuj~pkSBmI3k3}uF6Yn.->j+hFjJ9#4{6fmx');
define('AUTH_SALT',        'F&9ykl]2^wP=3Y~BSKFc>n6E5L%,XX_@3t0BB#jkh7^s[@f@[Lyh`/Us95cHBMaU');
define('SECURE_AUTH_SALT', 'aF?{geQBD:uTtg@~A??5J-M4|:eTqVaD ?s/8FVZ--abM ~c!Pg|lgXEXrTa9Brf');
define('LOGGED_IN_SALT',   'vC#Se)m h;2:QdZ4T{FLA;uS*iZ+ka+d7v du85Ipz}A*Yj&ez}cH:5h6 @+BCl$');
define('NONCE_SALT',       '%ZLM-DT)<oH6{/cAS0Q{jB)Q]<jU/4u65okUfqVy^<CssKnItvHmK-~&<GhkZ^d1');

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
