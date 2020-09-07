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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gtclacso' );

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
define( 'AUTH_KEY',         ';iUOgvEl6j;Z7maaZ34WA{eT84UazVz)=`tV:_mk?l?#aU[s:mCkpEpzQOY#YDfW' );
define( 'SECURE_AUTH_KEY',  'Q|rZ7zLR ! WV:dgk>V@A4uxs|`}DaLo-]>oZ@N&iZ7L.6=|8{q$1R?U;.hyS|wY' );
define( 'LOGGED_IN_KEY',    'q_:`]2I*0<oFQ]{>kt2!Go2ae#,,ynyx_.c,{a{,R.%`|+}Y82w=r+tiL<^i}^)0' );
define( 'NONCE_KEY',        'j4}/R.B;h3igwoZw >I{0[``7.M>)K!*x<LahE#:3aTptY2f5<trD;/KCRu>haiq' );
define( 'AUTH_SALT',        'L7KVyIgPZt}FY4sAximgMk 6X6JGRWlvb5qs=oYbo^?U/BT5{3cFrb#DK|rdo9]%' );
define( 'SECURE_AUTH_SALT', ') Res~*11v4(#IN@Hs8gK:^0cW3,b.Lnnz^j:%NnL/JDE GGidyc.?,aa|cX6r%A' );
define( 'LOGGED_IN_SALT',   'ba<<(.H${U4}^`BeU=uD9MdM-3D9$E?_ENcT|U $;9u-8A_gihULdrL~7/#-2[#2' );
define( 'NONCE_SALT',       '3l$2<LZueB}BoR|ZAtG)UpmDk5r.&+QD;hXzdaq(tI>M8]M<<;)oDnT>t,N$@)=~' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

