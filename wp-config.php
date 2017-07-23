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
define('DB_NAME', 'wordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'o9(cMH$gRjs9p0:Kq=mQNmhlzRv5Jx[NvL$VP`O;:rX^nO/]_g1O%K.>jYKrMfre');
define('SECURE_AUTH_KEY',  'GvU>V:[Dg>zkS9cgdJr>_bpdaeGk5S6oO4*q`vqfLXlDLz{ 2BMboBCt,I>( y96');
define('LOGGED_IN_KEY',    'L&I}]F^S1H,;?1K,RC:xnm1c_eJNv*/yh)VY..SsQ_sM(JmJSPi -+Moj!>)!R>T');
define('NONCE_KEY',        'aDXnTyDOybfnYM=5<f mpC0C,%%!?.VHAejeAgVME&QFC;iW1Ml6,s<^A 6+7NJ;');
define('AUTH_SALT',        'fADhb^SQ2,XR/-6GAM0-O8UDO=-a<lQ&b~2K$-a=mR~)@nwfQ^!rtg#^47hZ{4wl');
define('SECURE_AUTH_SALT', 'oc4ddKZ(8Txs[y2|:/%^OYEF8]1-3z5|r,[^+cYf.Ubop:%mOsn}HCq2rYi?`%/r');
define('LOGGED_IN_SALT',   'JOz (@fWdi*yB;Fcu7%G7I/G%WQX#R0RG}nlnD@/qJtv/A )h@bYQ]y%^{kvM/E1');
define('NONCE_SALT',       ';~_X)^!Y.i ku[%oDA<HED?=Ymmw#b);@B[ZyJlDU*rC~|%)!+~ {06CXH*T[H]r');

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
