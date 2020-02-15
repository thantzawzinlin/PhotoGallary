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
define( 'DB_NAME', 'PhotoGallary' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HRmrri6ws9ACycq44o3Ee89dKRNddr6XgVkxJR2yOy3WhCLQbOhcx2GiZQ4MpgWK' );
define( 'SECURE_AUTH_KEY',  'hZeIELbfgXWB20waQMODCH6c8MLKp3wPzN5Ts1cbaI6l8iGl5PYyFXd2PYv0DOmu' );
define( 'LOGGED_IN_KEY',    'BumqG4whDx9OjmKg3VaEQhjj0CuFY2DTyNb72DQQv2XbCPBSs4s8u1fUHE1cmzGb' );
define( 'NONCE_KEY',        'cCdGTwC1rmuNMjRnPiWDeRgivyscaC5MQFVsLM2tRc1Asvwnl40tBWMEwMsyz97V' );
define( 'AUTH_SALT',        'w8loUOY4OWG26w6u1rhFrruqxob7JBaQPF3FkpF0cvTqY4qUKhD3qZNxorWBjTqC' );
define( 'SECURE_AUTH_SALT', 'YVQnxHGWp9sCsBf6ZcQafw6YeM3k7oWOtBXXtN5ixfRx9EQVTTJuTtAQeQVOMyiP' );
define( 'LOGGED_IN_SALT',   'AT4J0OCSgCccGLAOeZbwMYCNLRNrKb4pbXUOBSr3ULqvo6ExIK5kVMOWjpZYGP7c' );
define( 'NONCE_SALT',       'gvWcydfedpJYsnoNnBCCBbklCc7IiovsIigIwQc3g12Du3coqjH7MOpJSPiIXyFO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
