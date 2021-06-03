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
define('AUTH_KEY',         'G3qC2JczWKbUCxhbJi28I0IMW0s0HwPls5+eOOLT7Ge1E00+I3cJ3zmZ9AbbyvdTK9m27K4/Il2alZTzBLEZUQ==');
define('SECURE_AUTH_KEY',  'cUgzh9SaoOgwWpV1oqEfm7BohBA9ScfW2qX9ypBaYq6g97VBh0t3TWyd+IdxPeWWwanLufh1x+PWnj2fPsW9sQ==');
define('LOGGED_IN_KEY',    '0a/OxIa6KjJ/AkSu/FQyo3d54FdZ2yer0pJlIUV0Cn8odqbnesyUu34DYCSLfpN75U2h0wPNWBI1bAKlGKKW2g==');
define('NONCE_KEY',        'KaerWOaflsOvqzUQ4CM4LwsHu5QbI9eJpzl+FRD2LIx4facst/iUkf5hn4PoeEys2b5AqKF6NeMHg4IFMxcIBA==');
define('AUTH_SALT',        'k99PEKQc1QLg92arkjwq67GUZkHJR82jBH3q0LjMABwYOU7CnGXVu01es3TqbU2i31Q6Sevkf3pIT0DYgEYmWg==');
define('SECURE_AUTH_SALT', 'JpgguBSKyhuP12hRSNJQ/D3my5lD/EzOqY1Z0t1GMBill+gSdq55aBKIoU/DWhSETKc8j6q068QN3KsQt/id9A==');
define('LOGGED_IN_SALT',   'BLROuDSvsW8e8X8hJOG30A7I150eIRZpc5QWDavT008hex9DGCFLe/fwmbhqNHpyScddlP/TaSQi/15+tLdfbw==');
define('NONCE_SALT',       '62Vap/vDn9X0BbrzqSGpUAXIuGPHh+vFILpIOOHAKyOAYJl15Hs9v4ljzwBRsgZOIDKm04y+rWbPoI+XOUk4QA==');

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
