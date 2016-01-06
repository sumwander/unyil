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
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '0dd1e2348c');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         '3b6a67c8415e9584c18d16181a88205129385bf0d90b5b1a4d53b92d827a8925');
define('SECURE_AUTH_KEY',  'db01bf174e2b0535234ee589f7fcd5a817a30719a9bafe6bddcbc61edfc8650d');
define('LOGGED_IN_KEY',    '4600c670446749f073c40f20eeaeb1792ae4eef9a22e196c36beeca5cd58e1f9');
define('NONCE_KEY',        '478f6a1516642a362d9dcbf6918eae65c8852bdc951c041371d77ea22746d483');
define('AUTH_SALT',        'e08d9cf61976a15d1a8751c291980d562a4b267dd7de05ca9119fd72aaf7926c');
define('SECURE_AUTH_SALT', '499d66998a77120b17bf04b657ae107c9a6dce60f7988f3b756cc859c2f6bd72');
define('LOGGED_IN_SALT',   'd1118e55bfd1ff7bfab271e2ef8ee6619d070421a68e02f4c0f5dab4ce91eec3');
define('NONCE_SALT',       '3ac14d8c4dc9ad1489dd4255dc2544f0952d1b0028371a4e63b085161de986c3');

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
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'D:\Bitnami\wordpress-4.4-0/apps/wordpress/tmp');

