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
define('DB_NAME', 'wordpressing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'REys=w2i;u!ry_`t]<]t|2C,tw/:4H&A^}Xt7tS$:ZMsu7^R~,`p`dnZqwrH1t|T');
define('SECURE_AUTH_KEY',  'Dqd]I;D`zSRoA2p[zh?~/lcwI*olU0. -wdcn~Nb[!Lzg>S|;T :-U8)v>Lau[,o');
define('LOGGED_IN_KEY',    'lcy@Z|{Rj{#fpX,Nv$0b;Ak]]l`@z1R^yHo378G]>3]zv#V|,dRn&^$W+NC_-s{G');
define('NONCE_KEY',        'U{2A!APOeJS2a~CoNW8|>3O|G98[;ic,lPz [HtF>~l;q#l@rEBqXA0X.P}S92+i');
define('AUTH_SALT',        '[qRQ1?5>q$+KLw}8xc@4rf.VjL>XfVzt|{J4~3f+3:tb5H|@317&&l!/@#+7vyfc');
define('SECURE_AUTH_SALT', 'Y;J}BoY~{dY-u~Xb$]9$o|P =J$X7EH+/`Xvff[M[aB+egy&UXj4`@}z?P7ftw[z');
define('LOGGED_IN_SALT',   'eoSdmV|`,,r!8,BPi2r<,|SpdDEM+xZyNb?jaP4^ -e/_oPE)/;8/Yzl2V)^_8r-');
define('NONCE_SALT',       '#=Gs3,}qV:<G1?My5|{GIg-V%8QZ@P%dXNZ8IHe%BQh[QNWTT7BQ(h/|;O//Is{/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'julio_';

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
