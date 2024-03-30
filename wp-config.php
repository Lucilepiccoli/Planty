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
define( 'AUTH_KEY',          'pdh)^%)ttX@<A{w*-2i.d%|T{ijay}X`62/NF/gy@kb~`oH8x,S~~Z1YjmMmdLQ*' );
define( 'SECURE_AUTH_KEY',   '[nL~|0pW_8kubnED~Hi{H0#F{SikEj9#UX-6YNHXUQ{XeTo:7*<Sd@iDtomF{bMU' );
define( 'LOGGED_IN_KEY',     ':X+u<hb>U5> D$ZIS3lL(#>Dn+t2rAIs#!x;I)on>_E@**iGypf:/]J:[DgF;y0s' );
define( 'NONCE_KEY',         'h(O/EU~JY.BtON*wgvm3nk)vE]ZcI[f82N^hc)vX)s&}_8B:jZ;Z3VbQ ee?%WzM' );
define( 'AUTH_SALT',         ' }*77tsE.._v9Cyh!qn6W^^9X2WV_cYN$0gmmfc9]|77hVX-RCl2Ok9(P/B7U#^{' );
define( 'SECURE_AUTH_SALT',  'oIRV-OUWJUf0nl8F%[rJquuVj_;$r%#JOM#E|B+^K0y{5>s@f0x6D~vj(bz&|XH4' );
define( 'LOGGED_IN_SALT',    '&Jw}xn25>y/=JAD?Mg^#}FmMk:~flGzESu,@edBG39F|SX#q>f.*bL7QtYQB#[SA' );
define( 'NONCE_SALT',        'sHJIV,ZZ)FMzdw3%W(M9b4@;z&UYt&`#j:%l/qfTgYfB/KSgHXPAb/%hvhDMt2|C' );
define( 'WP_CACHE_KEY_SALT', 'eEXCe<tm%V%75[w&|NSC| B$3vUvruj6ti698al]O!(S?lR{rJ.^lKF]D ~^?E7f' );


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

define('ALLOW_UNFILTERED_UPLOADS', true);

