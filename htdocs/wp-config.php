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
define( 'DB_NAME', 'epiz_31066019_w557' );

/** Database username */
define( 'DB_USER', '31066019_1' );

/** Database password */
define( 'DB_PASSWORD', 'S1R8u4@-jp' );

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
define( 'AUTH_KEY',         '33kklflihphnmv24rkzgijaky01sm84txpd0ukxyjq4nwpamhkotwfnpkw7fwilx' );
define( 'SECURE_AUTH_KEY',  'vjlgobuipaorfptosbfqvocc3vhnunij6j5oozathbvosghlfj3nf18ww1gqhlis' );
define( 'LOGGED_IN_KEY',    'nbatxtj6x260detnt8icy7v9psek9oi6nvff6qomkrmvmzgckxv6amjhnqknyixr' );
define( 'NONCE_KEY',        'jghulxaliucrdovbq3jxocafbbou3qax8p5qcehvtnq4n4ckgcn9z3n7wckocai0' );
define( 'AUTH_SALT',        'wrq3tf1mtkho1abnigo0cmjpgelho6whdjbwipkdtgi2pt4uok07zoz9fdrfjthi' );
define( 'SECURE_AUTH_SALT', 'wn74pd239nmtbl8b1jdkmysuq6rajlec7dfpvnyo1a23xfy5lpydx0nauelme0vl' );
define( 'LOGGED_IN_SALT',   'x2grwoqyitfy7t5q0aa5zyvokjcjnjspuin9nmbsfelgsoawgqj6cwihlcne02zy' );
define( 'NONCE_SALT',       'dh9sgcec8bdsycdij7mw1suimdrionb6hvyxgmesit4nv8hrswgq6kxv0tillapo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp5s_';

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
