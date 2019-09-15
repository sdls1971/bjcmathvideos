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
define( 'DB_NAME', 'bjcmathvideos_db' );

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
define( 'AUTH_KEY',         'RpJn=jnO4M!nV3?G98Ky=]$nq fd!aC9iBgpDZ2MPG4MuQad#H.q@VARDg}K(UvX' );
define( 'SECURE_AUTH_KEY',  '}bBS9H`f%()zb/y^%v}8fjvmdN>m1y>,>N$=w7kLNOrDpAYQ2$1}p/UWK)&C*+n]' );
define( 'LOGGED_IN_KEY',    '/>T^+2j2(J)S/4vW$=@byj>eL&~QtKiavnSyLtvubNj-D h;lD#)XLzrew8x^b>_' );
define( 'NONCE_KEY',        'a@, [ivE.wcQO&G`e6JT/V}E*mSX.3;H 2uVI%}3SzR!43.25W{rxb(DftB]Uh<I' );
define( 'AUTH_SALT',        'bzMr} Qa`a`X<DPD91Dg*jo#EA!5wh, EWGe9^X&/Z/@NCKp~{1lUN s[R({`yrt' );
define( 'SECURE_AUTH_SALT', 'kks&XPIfiQgsR<LVLtl9.r/apieW46,&c@r&Ssw~#!u{E5V3S*=FOa._Ip_`Sj]^' );
define( 'LOGGED_IN_SALT',   'Eu).*[Oo+oqu2-C<HTu? 8gw.%Bi=xf6rip<D+:JI52rIxwLa?B;BS+k=f)gQe8?' );
define( 'NONCE_SALT',       'u]qx4$5TYPxMeed[Z|bs1;#hV$;[)#w  :SIIe`=I=t1?Yqv,_e9Wx0-ftP)=D-D' );

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
