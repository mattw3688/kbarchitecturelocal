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
define( 'DB_NAME', 'kbarchitecturelocal' );

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
define( 'AUTH_KEY',         'PLnDAduet9osvYKQAD8RytokAMu2SiBgGtR7Sz3mFyOXjDGQMRAOJ4zSeXvWfsg6' );
define( 'SECURE_AUTH_KEY',  'GaLdgYgQPdBp5H9QekrjbVyjiUDLdYsxVQM8JpiyhS2MuQJObdIzFIJsA4nuQcRa' );
define( 'LOGGED_IN_KEY',    'AHTHZkK9AC1txQw8nO0Epa4D1Wn0XAh6MDBEI5K8OuCsa7uat6o6gudpzbGkRfRo' );
define( 'NONCE_KEY',        'AI4nUCL5vYBkjEChRwx753kwdosh4N8MST2JTxN4maLQ6ESTyu12AlMpiBPxWt3u' );
define( 'AUTH_SALT',        'qAwIPFyW04edenxi7b9I1wE8B0DvSZCSTJre6jSnT4jnWoT2XFoAloTENRTOA5hs' );
define( 'SECURE_AUTH_SALT', 'JT67Jq1YBZK2HmXH7X4R08OztXwqwe8P8QUtdbQwsjGt2B3WqzuhNSkdYBeVwwjQ' );
define( 'LOGGED_IN_SALT',   'VTid3B5aQhGs7urAh8KxHdCAHei1kEXTG1yELi4a29XisKGn9614AV2lbC8SI6NJ' );
define( 'NONCE_SALT',       'iRzKKEcCowZt8VkdbHLq8zWKUjK6SiOiJ6qVH3pyB7mxntAxtHpHQ9QCQeHz2YBn' );

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
