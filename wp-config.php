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
define( 'DB_NAME', 'wpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'pHbw#1oD9+8(;g`yOny/t7&Z9a5j[xpdKv0fPXQ}WC$}N{[x3a):i:SGP:MhD*,|' );
define( 'SECURE_AUTH_KEY',  'd:68OefXXoKD$n=-(^!NV<?1@j`%#OD`6(u#GHQEki7=pF*T6W.cJ5 ubUh|,WLc' );
define( 'LOGGED_IN_KEY',    '<I-4IJ[ya^8>a!5RdgHPn#ug,@wh$b|qe~ZN8$A!H%=3]5d=W+REOYm(Vn=r,k..' );
define( 'NONCE_KEY',        'a4`gBTf-:07esH@y.%*j{&%Vy&ZxEJF!/[[H;5Jk1D8Xw?b<&9bY,O$?A@p7?o&S' );
define( 'AUTH_SALT',        'PtJKOh7yN(B7B^Q^$`P1x?=8F4 }tLAs_tW!R8^S.)18,D_}rXFH}U1{4!/SIIKC' );
define( 'SECURE_AUTH_SALT', 'u<!z,v~uTm)d}>InnDQrzMqyD`nzML40KL7`>L}NP#^wXP,,K1($~eQ]Seb/J)<s' );
define( 'LOGGED_IN_SALT',   '%[Tg,:iy1|Kc`SA&rKz~j>3tDL V1F4C1Bcm:/=[0Ffzm/<|wn6sp+QK]<x^B**w' );
define( 'NONCE_SALT',       '`7Mj0)mZWxtj~Fi|IR<:a7RqCIYzkACOF>9q!m5W~@_L4jP9zF:mIx@CGA]<(fl8' );

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
