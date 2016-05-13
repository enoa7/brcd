<?php

include('env.php');

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
define('DB_NAME', $env_config['db_name']);

/** MySQL database username */
define('DB_USER', $env_config['db_user']);

/** MySQL database password */
define('DB_PASSWORD', $env_config['db_pass']);

/** MySQL hostname */
define('DB_HOST', $env_config['db_host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_HOME', 'http://'. $env_config['host'] );
define('WP_SITEURL', 'http://'. $env_config['host'] );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(zPQFwe?T4Ohn/xb8j-1zuUQ`}b@B8gO?F(Ne%}oFK[lohI!o/QP$&j^XE1[5IWn');
define('SECURE_AUTH_KEY',  'cZKYmZK_^E(NPg|>Z}|YlV*m:a,SFW1.?wu+i#mr_;)w,=6ra*DkIdC5I$#K]#yv');
define('LOGGED_IN_KEY',    'm9Y0yk/4Dx)~Mhkn.yNH+2~k$?NdB|V7@J:8[8rx,svw9P:9J(B!Q(B-l@Vm-wNV');
define('NONCE_KEY',        '2BWmqxyCD;d2/mvS[KBiu<WW?VauS;ukrGJ9u~2SEhX+//Wr#sMz90N_^ 7CYvxw');
define('AUTH_SALT',        '{hsLei;Z{Ka_efQF7JW#0DZ@lFkq y{.3[;yYw~}!v84.=L1RP!NaL.cbf0A^Q9V');
define('SECURE_AUTH_SALT', 'Z0A_DRHa&#&p.9ONv~W!_Ax)bgr:ceI+~NS.1,rV}RZ4-PD6:|P`V*zBNez[*h%i');
define('LOGGED_IN_SALT',   'e[7$8feJ;~RtOsW;W-J&Qv`tf0s#l~g+kvpvr/{VH~9vfAjZCJo+v>0K;3w~YXj{');
define('NONCE_SALT',       'ZJ!(ZQX>5`Lx KRFQc{Gdp~-,i@/>5lm6K$O&HK6$vtn|0x2^^#ym--~Ow3E+hfc');

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
