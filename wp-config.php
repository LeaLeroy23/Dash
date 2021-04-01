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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'hM.SV<WAmmS.ij&}r[X[ojz/?/ke(+brkY#QW5Tj=B0~1nRTu:;7%8.eV !o]5>A' );
define( 'SECURE_AUTH_KEY',  ',yPcouSZ(O8Lc%PRi@vkwj]{=yvG%zW8<tUF[N+/~G#Ezk?:hEXT_g4sbRHM1NGd' );
define( 'LOGGED_IN_KEY',    '%kQNxU9VD~U6lZJHC;-rwP9|bmwqVx,5cVTVHi;{=>N*@:!-7+4F00jq+Cz5YZBu' );
define( 'NONCE_KEY',        'JjfTDqJE(`/~su&l/G=WK~EtweB;C48(gYzHM|Dg=K!i@sr~PF2f3FC^4@2#Yhc%' );
define( 'AUTH_SALT',        'J8cw`w1vc~> RlnP22C*h}]_/v_T.}[DC5cxXdC|~!co2`W]r]+t{=CD/%+t|?|a' );
define( 'SECURE_AUTH_SALT', '_BFSD<<N`,IZR?T}P62,ErHl/qKrWf%B`]L9:G .o>2qA9[/n=+Qy&44O(ih0xV2' );
define( 'LOGGED_IN_SALT',   '^m*,S%%0-iTXr:#St-KBedv]ek]cCDV0%.p04(M6^iW-EAD_qM y/C,^S.D?1-9!' );
define( 'NONCE_SALT',       '>S{*3K4Y`={,u]IdS5vN|rJHS^(#q|nhhK-^}l> 5Gr2lRnfaDJImP5Qt_:Pf_t4' );

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
