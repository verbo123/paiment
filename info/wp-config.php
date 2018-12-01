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
define('DB_NAME', 'db339832_wazemi_database');

/** MySQL database username */
define('DB_USER', 'db99224');

/** MySQL database password */
define('DB_PASSWORD', 'Verbeck94#');

/** MySQL hostname */
define('DB_HOST', 'pf7-mysql.online.net');

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
define('AUTH_KEY',         'x0Sj/Agg5qwwJqKtd+t254Ov2Sk294WixCYch7c8kDGViQk');
define('SECURE_AUTH_KEY',  '4Jcx14z/7yc+/uClldUl4aU2+vqktQvPixh0BZailHuBk4Q');
define('LOGGED_IN_KEY',    'L3aufoZO3nhMQnTH+Vwcg4cHaa0gjfiudUYEf3I5w2BapaI');
define('NONCE_KEY',        '2KZ+l/+sjrLLdITQ+2b63AKApkQ4PAU9/VkjDV0018uYnIA');
define('AUTH_SALT',        'bVoyYG6nWc/kffR/NojRM37UMViBIkP1yrVT+g+HWPyFf20');
define('SECURE_AUTH_SALT', 'RdNFqzdLNJPLvx+NYHVwCabKrAmOhRmE3REi1CCFiMKNirg');
define('LOGGED_IN_SALT',   'CEpBns9vfGIS8n1YlGPjDCaFsoEG+yB7m4bDRC94MP3/LfI');
define('NONCE_SALT',       '4cnkK2WlNtCAEugALwvkMAehPqwPoHtIiSz3Stu6G2FgWuw');

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
