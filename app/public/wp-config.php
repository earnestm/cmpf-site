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
define('AUTH_KEY',         'rF5BBOsU/xoa7jkct43XR0xJUNbfggbo3P3jo7/5AxVQBhJ6TmcHf+/CY61jsntgggYDx24a5w7D8QjhHNhRrA==');
define('SECURE_AUTH_KEY',  '2MPCZcUpIIbOPLBPuAYwn3IRECIwLQwFvdNvMqwrr32IzLviCe33DUWylw6MoXKZtG27ip0zJr625vLfU4T9Rw==');
define('LOGGED_IN_KEY',    'ZAp8TL7nrWcg5VMfwAMSGePOS8IykAQCfZ2fnRx0q435HdRQ6c7ii6vnKbadO8tkdb7lNDKKNIp1i9gYS2iUrA==');
define('NONCE_KEY',        'ZAkLYExdqNyiE1iAgaSdeo/PpDNNUY30V3PZJWsBqZup7uOAc4zISiU7TkPPtc88Df/CJiBo+oftfh1gKY9V8Q==');
define('AUTH_SALT',        '9TB15vOvZ2JvG5fgsDpOfYpn1Tn0zqi0PXW9xLO21Nls0QyWJHrCPiPEtLNf6CydzDS3mEFR0ndW0ObaWPJf0Q==');
define('SECURE_AUTH_SALT', 'W/s73iWtmjTQ8l8DWl5fCDQcp6idi1euYKLm8sVUvWR1d/m/fhWpC+fHZ5bEWZtAyn+cGActRU6+T+MYPyuwwQ==');
define('LOGGED_IN_SALT',   'zSl7gLDR8Kxqxy0lvBHQia83lzwJsabq9CkzK48p1OJnHHiU+xEZAJyz0W1xsviG5HUTLzMY78XXA0oIjcrmpA==');
define('NONCE_SALT',       'A7hFKnJ4Md6jlgZpks64J/aI9C2bttiEYJ9lDGmDUaQbU6oOlYY81QZ0T0XR1CxeL0LdoicWSTOkg+juA217Nw==');

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
