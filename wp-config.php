<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oQforqa?iYL55_l1ekHq1/ZX^:32D|^W2@S@::](+mUT~]oP$wLanYEyrH{Op:y.' );
define( 'SECURE_AUTH_KEY',  '5k>5{2pUH9v(Noct7XN5m#5!1^HBjP[>Uf6otxtC{0z#u-}(l%lU>jcB,u).!wxN' );
define( 'LOGGED_IN_KEY',    '&dF5DCFGf4/}Rhy  (+IHLQ`L*lfM!/kf%=#YvY}Z*K74lgP6b?wP!ZNJs*_VX$9' );
define( 'NONCE_KEY',        'nN|!x?&1A.+4Nn+.Z<_B_$1 8LFzgnp@P,aG`NXj-Td+;]P|CN^It:7e;?T*stRO' );
define( 'AUTH_SALT',        '49m[,u4u)I8R/:$bz9o}/VOYYS#b^:?f0/)2(DNY[cl[4+Th^`ZEjs/im5w8p0pM' );
define( 'SECURE_AUTH_SALT', 'gW>4>i%p4_~RPbJ{UQzvV?$o#$B0[D#ripscbtbx=`tXmV]K)~#j!R^,}dS]d4Lc' );
define( 'LOGGED_IN_SALT',   'cowXjTuz{$gAr,8/fc9HhVz]X_Mjpt@E9;%XAcMby[iXjA.J$M#-N)F05.YfuFKF' );
define( 'NONCE_SALT',       'nDX8v& m9pXic6/j3mz|mA-Khft9n[$v0rZzGq(4DfhP7k?|:gm#j< sKWZF&?B:' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
