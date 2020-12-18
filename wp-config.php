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
define( 'DB_NAME', 'cesialternancerouen_cvanderc' );
/** MySQL database username */
define( 'DB_USER', '165269_cvanderc' );
/** MySQL database password */
define( 'DB_PASSWORD', 'VU/\\Pna0x9vZ' );
/** MySQL hostname */
define( 'DB_HOST', 'mysql-cesialternancerouen.alwaysdata.net' );
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
define( 'AUTH_KEY',         '}pp!0w<nO]g@:vWS2@u@>90hafJw4VU]B0^RN)Ex*Wp~{~J6=2Ukif@n;3 -(A-T' );
define( 'SECURE_AUTH_KEY',  'q}%Hp~}m0-6*,KL n9.%=7w6d8$M8Lt7`W4j2$>(KKPX[bMYNq?z?OK,GEd]G;(%' );
define( 'LOGGED_IN_KEY',    'N*$~j4][&>t<eC;s&(c*OS+sX?=CHGy;$!!GGxO#x}0(a2~ft.)~X%Y2UT@I|^8:' );
define( 'NONCE_KEY',        'KGZ[A,mB+0kRcBg+13Ll`DL4,`j>C:y:DwkuQoex@J5KbBZM8f,.XQ}AjM5go={6' );
define( 'AUTH_SALT',        'L:m7IK$BN:Ptv }L}S=v=XosOseH*@oA!XD=2,U2hVlda8cofbi}<)h3bHE4.E*3' );
define( 'SECURE_AUTH_SALT', '/.Dfv]3!=te~L8!zr$Gf]YajO17V7^iM<lx-l/ycn%,7ym]qtiHd,4Dw]Q6<>c;O' );
define( 'LOGGED_IN_SALT',   'qyRAW/:aSFmE`hVp@>}w#{jI``PlkZ.[Y,oHQ2>==0|$NE:Jl^uAGy$HP5T0BS0s' );
define( 'NONCE_SALT',       '/#nYDwqms5Y5X)C8mv0>%,_Zfpa! ,aXHgvv`Ulq]HzoDu@|5.!(mV}uAk?C&#wT' );
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
define( 'WP_DEBUG', true );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';