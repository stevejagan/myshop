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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'FC^?=iZTxHPu?FGnh]uH7re[@P-|.]0~V[!z#GMHN?K=}o.:hZpQ`Yz4&)|1C8LF' );
define( 'SECURE_AUTH_KEY',  '2EiTE%`eFW2PPl?.+<kHo#E>>V5NzV3FWjNAs#yH+|NNp[9i)U5)Hgsq^I):O:u{' );
define( 'LOGGED_IN_KEY',    ')IY.SfyoDc+`nq!wj5~XKL6`=)IHHk|}I&91VynfRT,4O% Bl=YpFTAr%^N*N4zr' );
define( 'NONCE_KEY',        'Il9!,lkUdX*TK1MJhV4:3A+];n|I%-<d%t{?0*!C,!}H,Ro[(U^!Zmw &@/K#ffv' );
define( 'AUTH_SALT',        'b9n@$B.QRQIQ4&1Ysa%RP4A-Jj/HWznp+(ML@,Zi`=T`TV?|$/}RwjR0fiIp=vu6' );
define( 'SECURE_AUTH_SALT', 'l^bCkhq%gJ*@r^O#StOA`(:`3m-&|SyTBmjNjM=Nu?V01xUtggLX{NqLx>9UK<p4' );
define( 'LOGGED_IN_SALT',   ';v^%FuM>x )z4)^L0pFPE6~!0Sv_aBaXds_amkhKg =231+Gp`R&B_D~/8(tg/d8' );
define( 'NONCE_SALT',       'D8 :oJ@xX/+a*1(+t,hug]S8NDIZ Y(!w1X_t]itL~Sn}g2nZd6.xEx`so7;HF5!' );

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
