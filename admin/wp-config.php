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
define( 'DB_NAME', 'wordpress_rest_api' );

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
define( 'AUTH_KEY',         ']v.Wo^9}J6I&Z/f_y`ZbYG*/_/-1xVT5}!1)1GTCM;pHa#`I`H%^<}RJrAO13PSm' );
define( 'SECURE_AUTH_KEY',  'xQDssJ%<oIu/IJ(XLBU<,K3b1LMFcp5D&GO%>1u8dM~X:0rWZY2! ^`^HTo&97;a' );
define( 'LOGGED_IN_KEY',    '@i)nIXqWYWQ:65.SYN-?>[xuZ|]BGvkO!]{JkuQ(nZjn>l-KdWF]Ww~WKfh)ZZ0=' );
define( 'NONCE_KEY',        'npmTx}]<+Y[(+n&PFFw)2|x4l_C8<Z+4VC6<]({1AG)d}6[f8z3]Xpf$?Fqa^)#5' );
define( 'AUTH_SALT',        'lHEfL~DPOX@iMRimDo0zcx9M9+>LshA>`@>P|KnX*dm#.`,0-{-w#E45@:;N-RKF' );
define( 'SECURE_AUTH_SALT', 'C]7!=wpMiw?Ui6$(%b<~DW_,UtUT2PWaY{|,mk(64z,HgJb.d7H^oL^EGTY[If0S' );
define( 'LOGGED_IN_SALT',   '}s58^p)o^J`kP~SGi*A[<sI]pDeAz$L#kKxo>D[;($SG]$o6QP3j& *K-T3fn:>A' );
define( 'NONCE_SALT',       'v<UE,/-1&5mcoWSKoOPzh+;-IbYqBSI@n+=p@FFZ9*Ui:~.4Cz),a`cFsK/*<.kD' );

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
