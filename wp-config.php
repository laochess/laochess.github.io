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
define('AUTH_KEY',         '!S3gp.D@LHiLt^nmq[bkUaMMpu%H<F}7M;n:&S[xpO@d(3%wLBH|5N-F$pfSG4M;');
define('SECURE_AUTH_KEY',  'LC)*DYV2`X840? N025HYW2QZMuVWp/H4694w#qvW%r9Y+_O6S*yWVkQ@l09kYCg');
define('LOGGED_IN_KEY',    'nPPhbF#hunmNy;gp`!fe`1^#u4g!5eEt3ot2w<uTmyuq}83fo<&hWSBE.52X |Su');
define('NONCE_KEY',        ',Re|1VfI@V[1kr{Nw:zy{Hc%pi3rK3wQr0]F0JdGj0<a00K@VQHgd?)t_bpSjpW ');
define('AUTH_SALT',        'Kb ,2mY1wduYI -;(C|#Y/4$YA0<xA{l<jMJpT4M6KG4Sbuj(OF8ksnM=*`<tfFl');
define('SECURE_AUTH_SALT', 'jnn(%LgkVDKp$`s77S2oc+@/lUYNN{Rtd?Jykg5,>9|feLkA(yPO[b|B2At+nK1!');
define('LOGGED_IN_SALT',   't)~3*s9_-uX*zwy-k/8!_O*Iy;}?[HGCBDEcc[</^p3hO}l&D$ zmq*rg{P;=HKu');
define('NONCE_SALT',       'g@nV1&`GS#QT4Sm$rbZC/utLdX(Xx?lTq-JI1O,5:7h7e|82CiqU)EbY8}^XF@#M');

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
