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
define('AUTH_KEY',         'lpgWxei1woA5OPMMXtSjLq7D/EBQa66DnqAcyoq105eioIfA502WLT6159NvZXwULYwIE+ru3ToyzBnrHil2gQ==');
define('SECURE_AUTH_KEY',  'khmqUCn3P+Wj9WX+oQjZwUdpww4+ER6Ajk98a8iazBfIp7EGbgJU6noZ0wrdJy1VhOJ2AXT9vvsXhrxfqR5pVw==');
define('LOGGED_IN_KEY',    'LJfARUdWwMl8LtLvdTcpKbRF3bsdiN61qVZJ129mS4a/pipI+CcGeJ+W0nwX/ORi9qexPIQbLAt3B5wHZkfV6A==');
define('NONCE_KEY',        'UAkLQ70rqIcwRzTBanzO4Zkz0eg0A9ThzLuZKuyTY+7LWDqdcmlRbFwu2igl5k1eYQRsBEKhRlafiMKqnCF4fw==');
define('AUTH_SALT',        'xJWqwUzMvf7a1E98kmZPcrawVRbgdCesTihE3iVy2gV5e01oWHhxGcc9NMkpZzuFtkqKOgHDLosz6DdAgu5Qcw==');
define('SECURE_AUTH_SALT', 'kmllAtTxIEapWBVvBEOrpSY18eCdxtx/jRCTuUXUxRG9jAK+lF4udeU2bgHGNoRQc1JDWrswtOlaq0vwAd+vug==');
define('LOGGED_IN_SALT',   'z+49uAou0/YeS71gVROAZ3Isal0wAEUXAhEZKLu/vC4JjgaR2eIRaeLGbL/HkgTNhkCAw2VvxOjQGWANTUX5rg==');
define('NONCE_SALT',       'xMuFx0KMO6THW7OqSHtx6GafS2YCmuuwfqujBiqoU47McbcY5KWfoYXwwnYpEx7dlXUbV25T5q7EzRRY4rIIEA==');

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
