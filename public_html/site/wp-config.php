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
define( 'DB_NAME', 'xs727238_corpo' );

/** Database username */
define( 'DB_USER', 'xs727238_corpo' );

/** Database password */
define( 'DB_PASSWORD', 'nuze4m7zq9de' );

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
define( 'AUTH_KEY',         '}0ax8M^%16:cwe;v[Wg~5j_?jl}bN6}GCQIxwt=E^)2V<GZ]!12,%xB.^(]o}Mn6' );
define( 'SECURE_AUTH_KEY',  'H|wDC#LU^PC3Z}6wXq:Q3usEC:Ug%;a9L-b;2Wa-H=GYzf}l)TCqyQK6mcA_di$!' );
define( 'LOGGED_IN_KEY',    '=QON@&?rjPsh?0m_y|zK XA^/<]kbB~.$~!8W(uBUYrhEoH$7HZesMAk}V&vlYWD' );
define( 'NONCE_KEY',        'G`Lr{r_Yk>L)~PR!]!PMfn#[EU`/$qRMjl{bGG&z76Ok&4(a4$hm0wq4Kmvo5zD<' );
define( 'AUTH_SALT',        'Ts*3~A}O!u7mLj$]0|nfP`wkmIE]Ab0@zK|7`y-e+NW#Ar)E^Y2L=(oMIFc)2yJW' );
define( 'SECURE_AUTH_SALT', '_06JY<6qokV=plVr,P/z$kZ9OpHHf(K>cy9usvyJE2?_mf,M&_^|?h0)A8Q#a($K' );
define( 'LOGGED_IN_SALT',   '3DubzADu9! }E=gS9,Lh6:WPvG)}Pd7Q[B$4>p&mOzA,khbXBG_{[<<`.KRL@T-{' );
define( 'NONCE_SALT',       'LzV_`8T<aksB=G!K?EGk`EBI6sA;!Ko|G-qii94y<i6Ud0k8C+*o686>B?hkRY1%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'corporate_';

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

define( 'WP_HOME', 'https://kinoshitafe26.com' ); 
define( 'WP_SITEURL', 'https://kinoshitafe26.com/site' );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
