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
define( 'DB_NAME', 'dnotice_media' );

/** MySQL database username */
define( 'DB_USER', 'dnotice' );

/** MySQL database password */
define( 'DB_PASSWORD', '12Dnotice2468' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!IxtxrlECj8dAL5d@(1#T><{Lkc&]}7UNbQ!R^%+IacGl6YcHdY]VQ~v#dAc?y(-' );
define( 'SECURE_AUTH_KEY',  '&r)f;4wYt3/i{Xjp,0:R@;3P&h#v3!7H)Gl&?+t0Ts&dr48g*U0l9@H)f?Gg:s8r' );
define( 'LOGGED_IN_KEY',    '_+uGg3M}O1#eGHi)s==8(hZkexa+b;)fQu]>m.E|/GT;H|J# Ku{/y^*<IeFG(ET' );
define( 'NONCE_KEY',        'unJ3x)M}J8mAyBCkkUZ}oelEmW&^7LH?$5/m9XZ8ij:64Rg=UpOx?}1`U-A!8}IB' );
define( 'AUTH_SALT',        'eG#50i6R.WtNcLf[q >@F<JZ?JMn!.SVmb5^Y2@C!i_,ZP2J--5VSCQ&W-#3z7DY' );
define( 'SECURE_AUTH_SALT', 'afHg*Zm5mSur*%HT=Kwh0XLTnXx!KWqnI1k+}m(9!DKu$!MMieXgZktu(FR4S{O:' );
define( 'LOGGED_IN_SALT',   ':Qjg3>`oP#UhY]2t5f.ZLI`Hu+j&Wtc$]=jq3.d3&zZDFwDG8zzdOpP!k|^!5?xk' );
define( 'NONCE_SALT',       '7BOyg3EI3,X.?<O:@Mc)jr=oD;{(H?af[ _d_08Nba*a_ YDq|wz=]r[&S,`|.?[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
