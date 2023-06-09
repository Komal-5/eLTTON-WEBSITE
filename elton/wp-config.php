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
define( 'DB_NAME', 'elton' );

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
define( 'AUTH_KEY',         'c`&~E@DY!)K^C3+a7Tv{t?wB[>:e#`?]jRANdAF66M`0[[KP]aKO@VeOxMd,_{q7' );
define( 'SECURE_AUTH_KEY',  'k=zW,HdmY8g~CJa@]h9~TP)0Vd$r)SngdBAd2{_iHYA_B}/#h&;VSct;R6Hl|vLT' );
define( 'LOGGED_IN_KEY',    '7fL}YSksdhbNZu(B,@*,;gG:8!UtSzZV5kXn?k?o2>]#v`c*2?#%FzR8*8=5vC>T' );
define( 'NONCE_KEY',        ',_ln*+9arxyUh%mQe~$tPqlWVUvE8w@;`ML_]UJQsNO|tEK$>i9K,.;^<Rc)(eZ%' );
define( 'AUTH_SALT',        'sYxXHS_=>2eogPOz`*WDJxkU(C7ldEx7)+m;WRVEXevs3k=rc$_2+2UaDnOF@d?_' );
define( 'SECURE_AUTH_SALT', 'Uj=m*L$JIucT>$miX4[SE1Kf_;04>{!r3(u6MsV&D|m|r!bOQ0v8>f<v(n}iroZ$' );
define( 'LOGGED_IN_SALT',   '?w}.T`dK!6isij-#U)67f$Ly@I-sSj7y<r-2LX>i![;F-% J$?$sl%iQjPM*x8/F' );
define( 'NONCE_SALT',       'vgQy&4kp)R{9+r3Ujm1)J}mH rVkNQ(accKm+soAw72b9tu^:Mjb!^~jby:cfb/P' );

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
