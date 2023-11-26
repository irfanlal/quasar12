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
define( 'DB_NAME', 'quasarba' );

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
define( 'AUTH_KEY',         '|?rr9G~$ :ym-z2Qjd;AmS8g6-Q^Pft/wL&#//*gn9LIg.:CDG>}a}v7-!^+`[6r' );
define( 'SECURE_AUTH_KEY',  '2AP,SQ]_U~|E u_Sa}fign6YV|4M^4B2GKb%m!~+`+n|>F6D2oNGCGh|-kkXd9J2' );
define( 'LOGGED_IN_KEY',    '++Q^6Vj`R./J1f~<fhdWk?g/} (+2^-fsO@?&Ae3gD9R``jJ?k{KWx/)_a  -0+%' );
define( 'NONCE_KEY',        'buU/kU}B(QTJ~pVHI.4Wx1bAj${3(PdkDAqYd8g#hL@D-^ {pm-h)f5V2N!_T n+' );
define( 'AUTH_SALT',        '6Wpn46r~OL]HtNOe[pqxWwI$.*P!rDwv|OgeyV`=<6SJaL%R6[0#(sJ:m)O{*i#{' );
define( 'SECURE_AUTH_SALT', '`%t`<^BCeoI`4!yf9|gPQ8Nwu$7H<XL&6;%XZHh%TK:Ir:^A@P0[o2y`,FG7VkQL' );
define( 'LOGGED_IN_SALT',   'm.Q-A_0xeBL@1dXt47sg((Clf1pVp.`V{`7izhtVd7viU[9}<]iOr?cz>p18b|QJ' );
define( 'NONCE_SALT',       'h*3jJ*SPKL|;Rk|cB1nfQ)}XMUVT$/0Pfvk/0),>7f8M;`S|(wJf88W&{eFmbj2F' );

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

define('WP_MEMORY_LIMIT', '512M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
