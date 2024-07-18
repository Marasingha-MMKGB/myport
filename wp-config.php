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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'port' );

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
define( 'AUTH_KEY',         'df/D!r;.jL@D2KhBiz(sxF1lHV]}V%f]l2?_2>RX?k{5yJ{TrY(i^54CfA%}V.pD' );
define( 'SECURE_AUTH_KEY',  'l7r,T77c-EP<>|9Se%Fxk+(JZXc[*J+UVT3.NU:Drh%n,_i7q5UP3Fe9L#2Ty-^4' );
define( 'LOGGED_IN_KEY',    'kpt~3JMR8iT9[+Z*ss_n0v;Im9_5$?[t!y!16JIE dC1}8+PGn.=|1;YPj+C>SD1' );
define( 'NONCE_KEY',        '*k&=cTfE8pz{=t%6D^k`L*vzrB`-IA(7zz2}E&z:J}Ew4g@bB[MVo{A^T<rVJRh.' );
define( 'AUTH_SALT',        'L67F: *knmq-p([b4ai_c/%uZ=t&8wZlEieWCFzH*{?dSk]WD~|5R7{O3?/;C3Zt' );
define( 'SECURE_AUTH_SALT', 'Z09(]H5]vd1sYnB:4{TgNTF#h8T_5w`+tsLbF?M:dJT>u@rv6hz%d9Llc6grJ?Q*' );
define( 'LOGGED_IN_SALT',   '+|~fA)%e%AnWPsAY$ow]D$(35xO3XsrD-*Yw1I|SXJHER;atnq:tEzcfg!+v}Z$N' );
define( 'NONCE_SALT',       'l#=KXVlY=Qt 4~oMI0ORvc#r}kwPZDkoDk{BL/@ ]H:VHj7_gLxOO6twn:yZ7X_Q' );

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
