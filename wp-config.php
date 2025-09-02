<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'mroot');

/** Database password */
define('DB_PASSWORD', 'Pass!1234');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '539994d9c3ae997a70e9ead9f222a59228faf691ad4e6c25b3618b18dcba5431');
define('SECURE_AUTH_KEY', '25153e42fd8b5193277fae21eacfcaa6664384aeb6847fddb98c42495aae084c');
define('LOGGED_IN_KEY', 'b233a5b9197f6451ed6bec386d9a9461bbc5c83cc6b581cbf734e2a517e7006d');
define('NONCE_KEY', '05aa8dad295de78f8c0f395b86392fffa3b03417d12de7ffd077f83d437ab8cd');
define('AUTH_SALT', '24ceb325c6e174a927a980383b15654f5d2b12be0b005436c636a20cbdae4bd4');
define('SECURE_AUTH_SALT', 'a81059d2ab084d3e196e330eccac9f610b3bbfafe1bf0b3362f34d965ee070ae');
define('LOGGED_IN_SALT', 'd3a30cad350b4acc0f567355cf856f076d2794fb15c16fff6f8900c3082eebb4');
define('NONCE_SALT', '510e84cbfce7a9410ef3c5f6c0a6e3feee68671daec6762c223060e7a3690b29');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'uZi_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
