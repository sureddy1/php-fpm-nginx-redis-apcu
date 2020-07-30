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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'dbadmin@ustxmysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Msft12!@' );

/** MySQL hostname */
define( 'DB_HOST', 'ustxmysql.mysql.database.azure.com' );

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
define( 'AUTH_KEY',         '0niZ9Eh VM:4?&cU,Vuj:MQE~49+n!~`t-qS?,?GxsUnDCe8QNqeZqMa6b1Uci*S' );
define( 'SECURE_AUTH_KEY',  ':MhCY>du$u~_sI;>m3aZh A:Z|-2<=O8o&=Fj&G!q[~;dI5ZC|.Fr2o(9i9?m!80' );
define( 'LOGGED_IN_KEY',    'ap--enf|+TjE#<Cd~bad6[+R7o@(UaM~!(By#F,f5K?@F)|5)bbjWHAcH>sN_lM6' );
define( 'NONCE_KEY',        'Xq)O[pwSRW@i_3FHW;~;{Qxv>WN>D!edAWj4!L^r~$C}U AA55}0Sy;@1Z-k9+Kq' );
define( 'AUTH_SALT',        'mv,t]fY%8D4JP42~%,Q|Yl#1@e.VH(/Qvs%I(RU8WlW(!uc`QQ#%JP0X&Q_vV!bQ' );
define( 'SECURE_AUTH_SALT', '8^lcy0?;SyVxAha0h|``CfX+YA~Z)CpLyRt+6GTWo=-)+((#EC*p0zE#($08mDQ{' );
define( 'LOGGED_IN_SALT',   'wjS OD~W6,eI:~K;6iZh`XDn-S4lyrZz$3J]q7sx<REEc~O=c~.o_fEx<0(?EI(F' );
define( 'NONCE_SALT',       'rFr9D?jMLES) c)#l`%vNuZ@4%9A{@_)hblX} G7 pc(X0FRcGGja;AIk@Wn|P;(' );

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