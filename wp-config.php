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
define( 'DB_NAME', 'greentem_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dtujsnc9rdesngzpmovfvpiyrnqdnh6belmo7o2uuinblfmj7tapyphuujliospn' );
define( 'SECURE_AUTH_KEY',  'zifi6rjo2yy5svgn9u9yoeiahim7b743q6oivpmw4wxwedpmu7doclkphkpt5kpb' );
define( 'LOGGED_IN_KEY',    '9zwvvajphogr42idgcvurmu8ifd858hg5hxctwjtoxfbf1pdtafsdrgo4exuzlpj' );
define( 'NONCE_KEY',        'zuqingqpgl7nfiyi54e0vy1gef1zmzqj2mfk2kx8yvta0kyvyjszosphrkifh4ev' );
define( 'AUTH_SALT',        'fygu7odlh3ijcdjd0jlw1axqsm2vgu8eixbsb3c3ukesdv4wce0wqwdl9fwf6sam' );
define( 'SECURE_AUTH_SALT', 'dwwltpmfjzqbvxatzcardvbv3ymkt9kyxap0x8226ni6rdippqvlgho3vungm7hi' );
define( 'LOGGED_IN_SALT',   'vielorssmny2he5sjbcjvb93gngfbqrq5h3xiqwwe1iw8nnglhx3rtmoknm7f5pp' );
define( 'NONCE_SALT',       'bzsoex3hxgmxnhgeulx3fogubrnvjxbdgljxinnqttobsczdslhqp55xoevgonez' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuu_';

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
