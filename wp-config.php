<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'EdH`t+hATj@!q]3zMl2-D,4WHJdaD9g??~pW[j 7)>keU=OLrftU`%VvU)f%jAlf' );
define( 'SECURE_AUTH_KEY',  ',k,b=CtK#(58f~Buk2%=_&qqP+x-Sl]uH*T=8M12o8?p!4X/JlI)S@rP6ysW)d%X' );
define( 'LOGGED_IN_KEY',    '{5I#q%mXptE8trM.!lw43&OjF1AIp@HgS#HYl)m.k$q8_<{H}!!Z{8Gz_7!qmaBX' );
define( 'NONCE_KEY',        '~F(kgoG.U7nTmn[$-]w>+&x2WjKgwRN|SYZJn<OUxhtk.<Z`W!Z$@#PqI%9c<vB.' );
define( 'AUTH_SALT',        'i2X~8Q,b(DGPAD&(^p}k)@Lm)Kk$^JzA7`K5*f9/[_yV:WV$1xwKkAyrg9 ](DXT' );
define( 'SECURE_AUTH_SALT', ']Qk49.qne0r QgiC}XP{St)<$tMsz}mIEb6 u09vJo]<zE<,dL[ `H@wDeDb Vf%' );
define( 'LOGGED_IN_SALT',   'V+i3E,mJ:z)YI?[ct}!pU!S@4>AY+RH,yBd*I}d;S]wl>Y`>a0S>vnH7`cbspB<L' );
define( 'NONCE_SALT',       'b5)/v]Zrr#^TggVD3B+niw6:MUSL@0x_3z*<k:2Ul7899NUOv!N3WEvhJpUT/rTm' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
