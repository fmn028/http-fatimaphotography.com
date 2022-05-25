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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fmnphotography' );

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
define( 'AUTH_KEY',         '|_,is=g mEKz.87nN[?PT1~zV>>voHR< $.)ZfN,DuYB`HK+3d7?86v$B.W7F8d$' );
define( 'SECURE_AUTH_KEY',  'ej9Ay%^w#wx`P}SzIX}NPt}/$DiN~NAphl9#Q0XBO#-_!ud>o0#bh_PH#Wnmu`_]' );
define( 'LOGGED_IN_KEY',    'Jh607>{pg*8zNB%+bd`Eq%0XW|bZ@YE)d3#B;i77Wl3%Gn^#%e>VAt@f3Nt3|Z^&' );
define( 'NONCE_KEY',        'YWfJN5+}0:WZrssBiG*e}d]!tOjA1V7lyhIBZ]3YW-uvrl6V_Z*l`HOT]9<wrJ_{' );
define( 'AUTH_SALT',        '/61PU$Dxy.c*W<Y&`dj ^yD.]f@G./{_<W)R[ hz!=l-!x=Uffox@HV4Ki)Pe6j0' );
define( 'SECURE_AUTH_SALT', 'K59$(p@A*s:h^C3^Jrfmcd,-_EBh6^q8J`oO-i-ue;z`KS^/&O7jK6yISvj$XoM9' );
define( 'LOGGED_IN_SALT',   '~O$V/.j6<6bD-e!OrV5,%9x:U>1Y$QDcn6&@/M6k6SZ4~m.qFYRZ679UvM)Yv &,' );
define( 'NONCE_SALT',       'J!19;XwNT;]b6$-q]R 9T#&$h2?&+Z^NA#6uZQa=cTI5u!N$9EO!]>J_2oC:g93}' );

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
