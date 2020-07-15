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
define( 'DB_NAME', 'dsswebdevelops_db' );

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
define( 'AUTH_KEY',         '*Qnp8,0J~C1Z2$v?s4_|2Iz$jJUdO{DQ4#!oHK9P&%bkS<0Qz0Wdg5},}EjL@Z-j' );
define( 'SECURE_AUTH_KEY',  '#g1T0K.C6D2@Tr)H,(A`R9y$CB~7EgKK}]K=E#J@1j0ncR5`wy7$oOGLbAfcI6jt' );
define( 'LOGGED_IN_KEY',    'iMD_10ge<?p{$E@+:PDq+VpOn?t$/S6C]f&94m #P<9 q3;)+4:Hr1Y=k+H}/6HT' );
define( 'NONCE_KEY',        'yhEs(CQ|W(0xIC&q3xKLilqg^(XRc4Q9iK<698RLo!Mfnmt:;G.W4T>^Fb]~yVTf' );
define( 'AUTH_SALT',        'AuX:F>+?Uk@S?X?/oBRk93}EdPW1,ZbAG!{gL>6H*y7@ DA*^ciO}:11[89Zpl f' );
define( 'SECURE_AUTH_SALT', 'FvU3[J.!ZP#qMf0r|@JVow8fohc5<%D;#A`95gT%Kt#A/CP5}pq.}AC_;[gYG)3|' );
define( 'LOGGED_IN_SALT',   '/J, jFlZ^h!!%tz0+Ei^7Eoay0DufZ@a?ZnAxwk6_8n[oykWB?e`~yIJ~*pJGUmj' );
define( 'NONCE_SALT',       'ANP82Xv/8>dxr2KhGmnfJS9`84zNLmlY@Q,_W=`@qo_~*Dt2sQ=wxGVV0VsYr@+g' );

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
