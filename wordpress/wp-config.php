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
define('DB_NAME', 'base-11');

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
define('AUTH_KEY',         'vB@}D<WAots>>TkX}pK#n;WHIyd7CXJ(kcz(ZWJOM$LizRau%.4gJ-Cr3M%H+#)i');
define('SECURE_AUTH_KEY',  'bsF1u:@aq(xm(jz&-XR#RyhY3)#UGMhhS;PQR~I4j&hrOecGK?VTy@zgY[q);(<n');
define('LOGGED_IN_KEY',    'kp_lD.@V(k8&g%`i{&P%#T5P#U*0:iF+bnWg]{(;<@dotXS[pHupVB&&GOfrs?%g');
define('NONCE_KEY',        '!qg!u]{Ll`f/KPO@i3!;LRQ~|(!cMNPA#j2ZN,OS&L~n?i:bL.hlEc([F<yZOYuE');
define('AUTH_SALT',        'H;,d]m62D%*x]Vr^lC,dRJTJ24#:`h<kNWU}/Zsd{Q >c8m!#24S6&uW/YjZ).l!');
define('SECURE_AUTH_SALT', ';Po|%UCg|jUaQc:srxYr=GGqY:EK+}+lvfx}_/XR.qv;9(BGdesgaq%ERSns{f_>');
define('LOGGED_IN_SALT',   'lZd,Y%}S.zh<!3PhVh0Op8o_(fdq2.#:v}e2C5$&%b-Q-}-+6S*]4Q]Gr0kx+l=5');
define('NONCE_SALT',       'YRp)xqL{pr%|t~X(*)]n:UA1 i&^ttqc@uFKjtx2sUnuDx20mHs7Z/!>gfZtm NS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
