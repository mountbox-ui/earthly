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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{nS,A.<tGu8FdU@0u8,xXeh2^FuFY9AI`%pn*8}7y[]WIH]@e]H~ezv.S,uml ~-' );
define( 'SECURE_AUTH_KEY',   '+4?r^YyeO;-$k>%cOV;$5?{-75iin$0LJFZ.,OT]S?CE@zI_a|uM:`Dq<9]DwhNl' );
define( 'LOGGED_IN_KEY',     'K^2t>vPVO}Lx.v>ctZ$D%viP[uIJDR_q)sN}RrN!2jy+GC3*)//wJe/9)d(=U;D&' );
define( 'NONCE_KEY',         '{iOD1xih.e?;TtWgw<OqWgxO_b3<=urX(]L[X&F).r_%pMn<n$l?iv^#H@.O+}lS' );
define( 'AUTH_SALT',         '`1+pRX_NJ+;`%O98;iPvS<Efer=/ .WY#]v$R(YJb{3iV I8E;c[pTBI6gBoC}{;' );
define( 'SECURE_AUTH_SALT',  '>}Q;f]8y#TRU%5RpDv6f+NXpSgULmTvSJNc/i6%ir>[-#lsBkyyYy+9&E)GoDq|B' );
define( 'LOGGED_IN_SALT',    'NjO*v8WOAPYtm%U_(/ P_?n?(lxTA:UR_>RjbEX|mZYM4SHD+|9)VQ 4E1T$?[FO' );
define( 'NONCE_SALT',        '3tV!a~,hp(Q^!zyyzEU-(-PD><3-L,x7%DIOC5M~cmi3dLKVHJKmAYToGr`oW1C^' );
define( 'WP_CACHE_KEY_SALT', '6qz;rw@[`l]aAA+dY/+<TUp)0F;}Q/FHrXvA-*}`/T::0.Ly2&twGf48Mmz}BOnG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
