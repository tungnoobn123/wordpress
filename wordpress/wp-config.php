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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', '@Tung!@#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#*NU-d<*6DOVprE,#yb(<~>bQ&Jk4|yKV6?H$K}ZE`*c! +J$^OiF7pea|L!RiNq');
define('SECURE_AUTH_KEY',  'Q+!+%4VIy Se/19~x>TvZ#%rD3k|n-{-|<6PV.0+T#gYU#OT!ts^5{3<Zd_<?%5D');
define('LOGGED_IN_KEY',    'YENgdb]$(&ic[b+y+UUW58g-E5oanzfBPJ&f*?7/rxQF^:Q!Uf$^=|#yw_VUgEeK');
define('NONCE_KEY',        'y`@9@8DSc<V^B-*wE11Q~x!6g@aw> 4m0ruU;n`>OM2 }acNfAd-_v}b*}svb2B1');
define('AUTH_SALT',        '|J9Al+Wo-`-cNrA8q.5[ynW}81&:~C%|&@-2v&1Nc W^}CGy@oDKbWX-Kgi7>Eh@');
define('SECURE_AUTH_SALT', '&|y{!zumLg|yWT{-d#%-=pvdx[+jiX)|r%ez}blxis7k>TILhNwEkvM[M8emiyzq');
define('LOGGED_IN_SALT',   '!UGdo(oZvz^7&tJpydm+KdE$bvBcrEcH@CqkoX]_=F^R Wri>+Ip{_?47fgQWSJ$');
define('NONCE_SALT',       'TaJBG3D-|W+cD:cn@I?.vz-$(Em|z^H^9Kc+P/iSZs?@|d@(KL[#T-n$;xq^BAww');


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
