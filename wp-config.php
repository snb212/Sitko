<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_sitko');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '_hgh#-4&@A|yU5wf}o;U-!BlsvIUY}JTu}m)!9~tbDRu{-.7|g,Su-rboq8Nv~xJ');
define('SECURE_AUTH_KEY',  '3bHg)%EtI{h]=reA:_pWSq_H3<XNFBzr^F-#[I6Unt@Q|J*_+z@+>1<RkbP!bvk/');
define('LOGGED_IN_KEY',    '^K-|ta|S M eMf{aP|45*spA~|{VeZ@@mCNsDu0&+>*7.T3=HmL3 Jy}{|QTw>U^');
define('NONCE_KEY',        'KTH;|n|Oyo9O(je,vvXlW[G~Xhm[)~l-PRtN:#uq-MW8X}oKl-z9`RnV~Xj75oGT');
define('AUTH_SALT',        '5&fgu!QDW2(luc%fQNX[gVY!?cIa8kaf{dA5a_VDUhB0`hEU z:hhVO1O%Gn?6+Y');
define('SECURE_AUTH_SALT', '{#>P0`_-:|]{MZgjtDZ@DEl7j@wTb<!r]I8:]hY<tw>>??cQxH-O-N__i|l82w#:');
define('LOGGED_IN_SALT',   '^nJV0S1UiXmBD E#)GIaOjwp#k&Gq@Q#e/ieKKMi4DwlW2PL<>w-no/q)o*/R%}e');
define('NONCE_SALT',       'P|W!R9/%|p`BqR%lJtV]yG~5Ctm#<O_lu67tfCUj| Jd~_U1z++-<QzigR0uaK#|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sitko';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
