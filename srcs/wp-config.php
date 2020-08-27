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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '_eqS+]WzX u,^ R-AN?,)2Uz2l;dOtQ^gLgC_v!qq+BAajX5Gbvo6XQr-M_j7R(Y' );
define( 'SECURE_AUTH_KEY',  'R^gGKR;@QbOU8J*5c@{GV<d,zq[ln]ah@(OX$><fRuc8_Pc9hd*`:O@y`;UW#Vjb' );
define( 'LOGGED_IN_KEY',    '(h4BfGGwZRi<*6mOEo@D%S X3Wh%7f?9%b1z`gdFz9)!|O_+|MUA`O6fSIjewZrG' );
define( 'NONCE_KEY',        '[D%6q]lKA@pu+pM_*41~hnxf0!XoW91&oyd[NHL5v{-;xW-}MvM_.4~IFa:F^Ck2' );
define( 'AUTH_SALT',        'NUJIWTkq`iL,uo11]Qz]-LbE|ISb8.|BZ>eqEks-mE]5:vQ]yxcj%FAzgAvVd6o_' );
define( 'SECURE_AUTH_SALT', '_.RFXXw( oCOaTLS%X#48D4y)c;]B~nlMxf^3n~>t-ddC?r/C3(G-=)LjvW|!NJ$' );
define( 'LOGGED_IN_SALT',   'KmyO 6nm-E_?>A@+HKKYl@U VT}]^P,Xy|;y?~+pE^zWc*fOW|12UrnQ-_H+qBJk' );
define( 'NONCE_SALT',       '|~)$k*)>]9ezoT0WdZPy;JVt?R$zd06:wnKN#`--L[[xdE 6Y5P7%LfMFXYRGH;g' );

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
