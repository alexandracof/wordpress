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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crowdfavorite' );

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
define( 'AUTH_KEY',         '(^7dVQ0^Bw{5FZTO2CE(?1Dw:5@4TDB94]>3j>@%3JX^z[WE=2fvqwcYo.PhLWqD' );
define( 'SECURE_AUTH_KEY',  '<V:JVq=tO*9jgPTr[<k<VhW;q4!3$h>v;D~7j}p/_o92nitk4E6vE.<f<:=x=e(Z' );
define( 'LOGGED_IN_KEY',    'Pgf>b)=e-(se%Sc_,MR?:xi~3lju4t##^=%|e`~l/buZ9 `{w:o(,n(kepqmkPCb' );
define( 'NONCE_KEY',        'Kj4m*D_>m;2K-9:??Tq?0F#H9}|>AF-${sZTl*LPI!>h_ttJ|7i25_i|5-0uH;wf' );
define( 'AUTH_SALT',        ';{nu$]Y)y*szICNN9r&1?S/v1+1teb[g{<k(0Gu a98zC$;6-Jd/0v#Q>Y:+|BfZ' );
define( 'SECURE_AUTH_SALT', 'h#*hVnI$)eb3efnvABGi$<&Is[DBK*vCgX)%v{i@uZt3>[>-l.(TnN5vvw21.I@s' );
define( 'LOGGED_IN_SALT',   '/uNWVLR=n1=nfdw4Kga]T:%+vTEV &(~K%0Mw+B!MP}Y1<d^05K%k(-QFj)l[xXm' );
define( 'NONCE_SALT',       'p;MyAlk!fD7VxQ._V2S&U}D/Uf.^M07c4^qg=l5a@J+:KH3/+u !Ax[#+I;?BIVW' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// include menu nav walker
require ABSPATH .'/wp-includes/menu-nav-walker.php';