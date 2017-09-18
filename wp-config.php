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
define('DB_NAME', 'learn_wordpress');

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
define('AUTH_KEY',         '^/v:@0T$wysY6Rrw(YQ m~y21Px<*FBK8-X;|.wi]~V-klhQ=Vu9RtFh|!WNBU(4');
define('SECURE_AUTH_KEY',  'RQd!:l{oWCqfyYRtWid&[<9a>I0F&6Yt&{ bT`adk)y0U<e_~-=G]4Ko#uy*X6t;');
define('LOGGED_IN_KEY',    'c2MzUaKm5(`Hog`Q*,,=S[t})>Ky>Ydm5F`8,=q=uz%*]Sjo[RW[n fT$HQvDBVy');
define('NONCE_KEY',        'dg DnaD.|X%nk<.C$G4Fko9r}@d|o7dAdG}dHr|;gIL$vfDr>b;<H8AW?vNCk)U^');
define('AUTH_SALT',        'CjJzC&am%HnN&B6d0$YZ[_6jge/%c};_)Vj]v%EqMlmQ41>/Xi^O2X{B3~979-|.');
define('SECURE_AUTH_SALT', '$86.ocv`Y]7Y20rqzxCMvRv+|^^!B{W+XE96Cy2}sFMUN=3d%0kmZu`g8A&V-CP*');
define('LOGGED_IN_SALT',   'h^WpTtwcO,bo}ABA=upVFk]5+_&X#R9QfG`Ww[Yi|,b3,M)c/2*d+]iihfdnJb1G');
define('NONCE_SALT',       'Hg{L`2 qob55F*s]aRDaE{m,+k;Q|}X5.lF,e4bF9D[u>LG5s3&0dki)5cZ%D0-I');

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
