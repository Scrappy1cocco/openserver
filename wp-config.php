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
define( 'DB_NAME', 'sport_island' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=m 7=$086@+@lJa7)lRDxDuHDMX=&E7LTaEN9ZKrHhw7eZZ*4;{3&;u FWUmQQO]' );
define( 'SECURE_AUTH_KEY',  '2r1>`fp#wRg-VnK1};_<}+ThZznDBd6b39>6]dc*=>47VkH0ZI2w)C4de<}S~q^S' );
define( 'LOGGED_IN_KEY',    '&YL*vKwA-4[%N-*jN@1:M;z*D<Bf-5Nqs2x#,2+l]Ku.7:]`%)l,9MPq{RI@}sun' );
define( 'NONCE_KEY',        '8p.9alZ(s9KK;oI-6trV;zD5AxKX@Ktf)g_gHl#/!gK+6UFv&DEF.O2<inNz}@%P' );
define( 'AUTH_SALT',        '+fyQ5a&9kF.u.0z9FlQ6mb<W9nMzSOnt*9t,|[U$_+u}6Q3?b.Cc%7|NJF&GR3 J' );
define( 'SECURE_AUTH_SALT', 'B$SvP3pMMmO1m~onQa|&]$gc7:sq|}! d[2kY}3$mC?I6^,D`|*pbKB8dme<w:Ym' );
define( 'LOGGED_IN_SALT',   'U5t%)cN#~vssLQOpG(>`y%J.hg:{[Az[2kFfD+!b{Oani(x.Z<* ;.<a[,7@,LH@' );
define( 'NONCE_SALT',       's#P])Xa5ZSy pl3bkve=B)mw`e5Rp>4j4@#$zKi/XSja~*AaO+XZs^0`JA^6m4po' );

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
