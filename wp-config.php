<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newproject' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'IQjlM3dI9OjqvzNf43R6DyMG1qX7tINMyXPeem4XuD2PdK9dIMqAu2yb3ZXiGHd5' );
define( 'SECURE_AUTH_KEY',  '8EVWSJbnKH13idVvo3qlcMHHoDcLsziU1wU2x3Bs5XWEzfUvZetHFB5NX3aMFjpl' );
define( 'LOGGED_IN_KEY',    'XwnhNNZgoMDUdVQxDI3X0g3iMpnZiLNZ3mjxKOGMBRvbpYVCopQgqDb3sie4jVDi' );
define( 'NONCE_KEY',        't6pUJnl3vjkPrsqkmj8RC2tluNKqAVCPVkGSZcPT8aQ164ayp5K555pJve6p6i2Z' );
define( 'AUTH_SALT',        'aO0TFcVRT7ZJv5bflXXCO9RF2S2K08MhTJ5NdhWCDhMGQYN581Sghi6cMk4IjhjO' );
define( 'SECURE_AUTH_SALT', 'QwUSB1vGgUEDAHV0kAOn2gfZzXi6IiWKQ9sIqm4l0nJmBSqBQV2ruxKF4q13whCD' );
define( 'LOGGED_IN_SALT',   'IdHhVI0LYEF7hD6O1FYl7D0s8RfT1H7yhs5J25kMHDNtRniQbW3uaWygN8G6QBfe' );
define( 'NONCE_SALT',       'EzbP3IthMHtMv1HHBzf5tKfDZ2MRcvBOyK6NpFZteBUIXpWkoEmtF6Jz2FBIxnD6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
