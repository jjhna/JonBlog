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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '289r29aOwfa/1+JAV0ZJIFW0zJPbdQEQbFZpqfrnFx40wrmQlkQhMJ2k3jz3PXxWYD10RZ2Cfx8IkyvXyejEGw==');
define('SECURE_AUTH_KEY',  'uE8mpYmlAvbjWlYPFNo1zx75zFSRfRLVswmylcJW53ZlysepXQ+FZfyzR/287EeGwiZWDUpiry59And13lJZEA==');
define('LOGGED_IN_KEY',    'lk3l9VeQ1c+iDK8Hj1gQ2ENE7vVKg1GDrVBINFzwkajmwV3/m+gOTdzVB2NWzRixD1TlEY0PchXoUx2dB6SSQA==');
define('NONCE_KEY',        '/HoRy0l50xV+PMcUk2KB3lro6R6odQgOWwinGGaN+dH32a03Xv+iTwpfCwI+zlPjzB7UULsvFe89V5aK5wnMkA==');
define('AUTH_SALT',        'hTbCXoqaLCE4aQcq5zRVZOgEAWngoNBkEYP0ZjxhUMLIL06ov0viIrBL8zu2DebhEJl2e7Mvo3jGYLjg0ElbmA==');
define('SECURE_AUTH_SALT', 'Xi9sINBmHK9CcIZWqPvlot+ABRkX7U4M66+mSm370DuwtqhJm31GA2qHp9C77vzKfJu7o2wOlxSe4MYAv9GQ6A==');
define('LOGGED_IN_SALT',   'Nfxw8ZB0mn5MmseXMog/bpaCSlNc1wLGyB5qQb3ks5FcuamEpOFFR6nNQUjZqhtuF8RdleqvR0b2DP2zanvXbg==');
define('NONCE_SALT',       'pxFgyXPt9MmcBJe+/MAbsCDMtcKCph3nGKIbzYIXMqK3jkUi/EWRJ984PbrLs5pFUgxc3+wuiTgWvdA1mS2Jdg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
