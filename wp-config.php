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
define( 'DB_NAME', 'wpnoman_db' );

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
define( 'AUTH_KEY',         'Sj~)8uu);%JNP<PhTw$kuO]8M+B?TV;jvs3N;}EteM5{B.`V?f}$C(H*^B{/B3f9' );
define( 'SECURE_AUTH_KEY',  'ro28M.i/YwxnbaP]b|52}Kmy&ew.S)HO7s4iq(Rqqut9<:7~{~+SRS@uTIr4,Xk[' );
define( 'LOGGED_IN_KEY',    'hW/7ZCxdY?5y?>y0s!E6vI5w^Kf-V6{A;/!Hg.S=qL-rs}s?Bc2FG(v$4m;JGdvU' );
define( 'NONCE_KEY',        '5P.Lg<4 ,q}HF99S?]BgIX^q@L<#;{<^+1gng-?|6:/TP`BHxK5<(]t7(g,*(2AP' );
define( 'AUTH_SALT',        'LHBl8/Yo?+0O`]MDZUfd?Bq%,BG:t`76_2%pBEC>{J9O#(6KC*%X4_bdkGt0:su0' );
define( 'SECURE_AUTH_SALT', '@{*<u3C-K^h2wo]5ktNMT=Fd+s&[~NQ-7%E$`)gETn[,&(|]i/[9Za2cYdSk5dL>' );
define( 'LOGGED_IN_SALT',   'vaKN>ZRj@FgaBB<@Ai(L*hJZ7<=-bILi%,05V+/hG6`s2vWT+8J_zKiVe(3t G0@' );
define( 'NONCE_SALT',       'kH.HXaJuxpl<k]dL,-]O{#% ZgQv9Pr|ld2ym[IZoW/_D?3eftKh>qS^FuH >MJI' );

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
