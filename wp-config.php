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
define( 'AUTH_KEY',          '(yqR<On,(JIInsB3mUH$R[MN01c|BFQw!7OfQzZI$z>6RHAqr((Nu1O^S%]iM#TD' );
define( 'SECURE_AUTH_KEY',   '}v9DF@J:E?YQfU++=2N%BkR-u=}H2Ts*$VB/7w=-]$+$pji8VF!^.UE>>*N8_v%B' );
define( 'LOGGED_IN_KEY',     ',Ngo|&p%3>t$rb6Y2MK0Afk&A/OON:PZV+a*$/{r}^$)qF4v8<o?#bM@|Ffz9UUA' );
define( 'NONCE_KEY',         '4C+2o|X,od~<:kSkI~6ET0@0LUF~|PXKL*:V,?cA~FEwvZv9:DA,|+?Q+qDDBIUS' );
define( 'AUTH_SALT',         'AlMsB_=fkyY%pa$,h{u_O>|Oa3JKmsKZ242L;nrKJ?=LrCzE.MxjkJmBeIV>4v?w' );
define( 'SECURE_AUTH_SALT',  'aSBqKjgROkljZ_2<h2P=s}igh]*5K#Qg0jRn:kofV~P]S+q,4sn%[$u%KZKZ`rQS' );
define( 'LOGGED_IN_SALT',    'RG>3R_|u5#7AiN(#!v,T4TzE=1zn[`r9H^k1o[fC!9V[=)*6(6`gHv:35%V{T/P<' );
define( 'NONCE_SALT',        'm8t9k)U[IBTSk{4Tl)>h>13fx-3U4K 0)JXvz0,b&GI9}7NQGX9*`%mq*QXdG,Xk' );
define( 'WP_CACHE_KEY_SALT', '|54R>Jux!-vcJsjjtfAKZ@%?_^<&Q7iS^hb=,TzW]9^<AIfm[}5R&. l}vppR.kc' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
