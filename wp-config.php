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
define('AUTH_KEY',         'a9fbcqcQ+1RA1/qr1rvsf50ry/Kn0Ee2fI3YGkq8Yl/GMB5A3AYCcRrv4GXqR6qfB4CPv/Vuwj5T2QsgOMGk8A==');
define('SECURE_AUTH_KEY',  '8TexyexEkZIf0tzBKVSzfeITO2FAegtCOGv41nDTNmaWVyDpM1nKkCAW140h1u8KJDufN8JJUVsiVd7gPXxYow==');
define('LOGGED_IN_KEY',    'hrq2RdWLF/2bQpB2pO52BvKHz0i/2q4kY99+ZAMgAxQCUD9dVaOe2D+DIDH7jZ1kdKi/ShGRGy7aYU5HCUhVaQ==');
define('NONCE_KEY',        '39HYNA//D55fhXwwfJE1Xj4tyqTgpkW2K3+ypJKi3O84QT7YYoLSb9OZvYsWAD8nBb3Jk+NNsJi3gOUyvk4SMQ==');
define('AUTH_SALT',        'wO7VMwoB2seLSTNwtfP0Fcz5l0Rc7b/uJYE9Be/eB/Nbc/E6UNfIF5mdXmWazkq1k4oBkJFTHR3Hs3+3V1mY9g==');
define('SECURE_AUTH_SALT', 'phHl1llUgaxXxNeW1aYHLQKVAile8Jefpe3OwhMvnB5Mp8RxEIfFY4Zgak+BUCabjzOUrubytuAfkMWKa4Hkgg==');
define('LOGGED_IN_SALT',   'x3VFNj02iG9F2G73lPrG9ypwsQFRwu85UtI32lrwixjGjs2c8sRAJBP7TyCvQyEuuZXAMIWh+NYoupy6A5fNWQ==');
define('NONCE_SALT',       'mowii5qWqEJAh/Pon984u2dz1FCIDVWfD5qrbLDLz7JTN5Dh/07GBxz7zuiuTnqXmYDtq8e+LWBKF0DtgV/GRQ==');

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
