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
define( 'DB_NAME', 'RankMath' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:8889' );

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
define( 'AUTH_KEY',         '=N6=0PjD/^9~eg=2{Sq>1KBP/)9(?kg]7!r7{ew1i;`DeT(`I-.FbdCMN1#qEcch' );
define( 'SECURE_AUTH_KEY',  '}=={w~JbUqSbn04#o~j{]bDB(tIsn+,RzG%R4 W]e4OmJ./zHF$/V=g#*Ih @bDe' );
define( 'LOGGED_IN_KEY',    '_SyL6/G8v=B08IeU+89`].vbHV|EWwpM{/V9,#>MAJ8uO-;VrG0dA<xWg7`.#Bi)' );
define( 'NONCE_KEY',        '1&@bF%<% ,Z3jiwyAyg*&c%BX76[7<g|]K-$_yg|S:0^;d26ya].?*Mz EnBQkX&' );
define( 'AUTH_SALT',        'al:HnCrsl #f*bYC]xE`#Y}Mt=.0/.;#$2T&tFHgNg#Jk[Su<bJ&x_aX3la{[EJt' );
define( 'SECURE_AUTH_SALT', 'TO$&nEz?NNu]B|I8tG{jHL8$IcTg^v`%G]CD_+rQ;PU$9W<eNPlr6{a!%+zTQJno' );
define( 'LOGGED_IN_SALT',   '6cdATCRro:U!*W]BnA/.^>,+}+bN9@v%5p08D5iRbE,0:0Co{d*A4Q}E9[=v7]`P' );
define( 'NONCE_SALT',       '{PrfeW`ms7i6V1>)itM8Z1t>`Q!D|tXpX^P<0/7hb^|<Ou5gNMb= TP9~3,6MhGT' );

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
