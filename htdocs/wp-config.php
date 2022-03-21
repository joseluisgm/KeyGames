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
define( 'DB_NAME', 'epiz_31066019_w333' );

/** Database username */
define( 'DB_USER', '31066019_2' );

/** Database password */
define( 'DB_PASSWORD', 'S3150up.)Z' );

/** Database hostname */
define( 'DB_HOST', 'sql102.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'akdrac46tqyezzkifwmftkbxjcruum0f9vx9vvnipuigoic2v1i7s8ggbhvvpfrf' );
define( 'SECURE_AUTH_KEY',  'ntvbzxrr5opepol1bikigxdvrvwlt8fkf9fpzxckttpvpcc9cu0jymwr9mtxjmcm' );
define( 'LOGGED_IN_KEY',    'rgfhmxbuwxvpitxxc30exdjjkrvlx5jpimqsmlvm6zevwzjhqmspz1ixazzocd5n' );
define( 'NONCE_KEY',        'gjpbtqrtumkzdoeehcdiwzfm0izjmjbhk7gfxr9vhg1mriei3vmfpe2hg4bu63ni' );
define( 'AUTH_SALT',        'f1qqccayyu3imwxxblhykxytodf4hrhcmmpwi6ofa6hghsn1msirwtfhv0h4strg' );
define( 'SECURE_AUTH_SALT', '0oq1xwmdd5wisypn8bluopxy3itk4xa8z1dp0pqi6itscqjcf38xm32vot1jwcaf' );
define( 'LOGGED_IN_SALT',   'obajugsuvykcjmuaptddsialgnwqxmpmpod6g4ycvc1ocfjmlksyi3xzxwham3j9' );
define( 'NONCE_SALT',       'c5fkxee2a3r4yobvueuevaxwzfrcn9ol3mdfpc0ocuifseen3ye8oe1keoozjs1x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpym_';

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
