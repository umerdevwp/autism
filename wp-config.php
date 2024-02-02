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
define( 'DB_NAME', 'autism' );

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
define( 'AUTH_KEY',         '[E_yyRN9umJ@qPebnsa.,Q~C|dzrh|RFV<Ba!H,.o4|v^?]<h,*x{?;t}Q+^bl%i' );
define( 'SECURE_AUTH_KEY',  '`t,>16V;<jU I:}PVmooim@.x_n0|@%y}ba1TbBftz|[tO(U|Mvo:!{}ci#kz9&7' );
define( 'LOGGED_IN_KEY',    '*YPUIScO}`i=TgZ#FSQj&&Bn`B(.ldFQ&#@,.N (.Me#1>S>%NoUf,}N| JPd?LU' );
define( 'NONCE_KEY',        'V=Z:X[iQew3}@C:lT}]5TMPL~5j{kCtY_ui1,4*Uve,ma{FXFhx|*4[@PbZ8Gc6l' );
define( 'AUTH_SALT',        '9zyOhUNwn_,S6]nN2rU|7Lbrj?GjP&[ji@HS|]`)To{X+G$Dw>qU&Lkp*e+..2dV' );
define( 'SECURE_AUTH_SALT', 'QL2z`B7?;8ZHK+tl!S0$M]v!]4/uh8$/E!,$jzy}Psl ^|,ADDa^6g~W%6<#%Z<$' );
define( 'LOGGED_IN_SALT',   ':V/9v@Sw/l8i_enAf#@~d=XAk7fvL`n8yPH}c(ni)h9y<OPVq}$.F@]J}OZn `]a' );
define( 'NONCE_SALT',       'y{  LyA-4#VFS,~xazC_-z6VRJw#E)XAV583ccWP29VJ@deDh~6vkjL`y-nt+NZ?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'at_';

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
