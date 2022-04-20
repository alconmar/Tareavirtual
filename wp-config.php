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
define( 'DB_NAME', 'bbddtareavirtual' );

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
define( 'AUTH_KEY',         't9,&LEd:E/kA1.:]s2D6{TU)nMz#ae(U=j`fYVokT3JMHv)hc)H-rop7%mN3BY*v' );
define( 'SECURE_AUTH_KEY',  '_~k:91q |72j:q%Sy[X,MFXx2895k)yh|!u`kX.4zDQwJc4H&xw:{A.X3fU]8Z|^' );
define( 'LOGGED_IN_KEY',    'b<}.mH&5sS6]oTA.26BpxSLqP1YQPw@L[?~vW_k+jM?a%0RCj))RDUjb4*,Km,Oc' );
define( 'NONCE_KEY',        '**UAYU,?qgGWOL f)`/=kz2?/.MzuJ1;*6hl|A6!;e-ojxN2>o&LY#vzG`vC,+|y' );
define( 'AUTH_SALT',        'kR0/YZ]XJ$e*gV*yX-!,Vo.R3Ae/7J+$wcA|]t43&z%T?+9$3N,V[/yUzHxLG>D6' );
define( 'SECURE_AUTH_SALT', '(VPx!jqo9]Ao09otbK/9=6tdpE,v2ixPSG;uUM&xZ% +{ !t;a1{0_Spp46VicLF' );
define( 'LOGGED_IN_SALT',   '.xlIZ~,d}a;bYA+`![+a.%zyW&Oo-skx-mNeY:G5 :3aE!&fz+OsJfk_l77EtnM5' );
define( 'NONCE_SALT',       '7C!eYuJr&EM]`kyM8`VypxGD ]Kb7G|!UNBx%?86jQ`PrWn_|GN{<`To#HI8}L!v' );

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
