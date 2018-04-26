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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id3839778_wp_c1caff28da3cbbbe5b7bd0228d457bde' );

/** MySQL database username */
define( 'DB_USER', 'id3839778_wp_c1caff28da3cbbbe5b7bd0228d457bde' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd332114b37849e487ce94f7063b3732abaaa098a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A0A7TP)X7sEn&1glsm:4ON>L1yiET$1-q#SB uW:>qP*dm]4Lu81-oQx+JCjqK7O' );
define( 'SECURE_AUTH_KEY',  'e%LcYf~5Jvwr;2Z@>T#!N t:c!B=,.PAjyxqO>X@cqgX!f1&!<1SuF< !Zz|2(Dx' );
define( 'LOGGED_IN_KEY',    '[y~]9&^9.vM0y8$$bT!N9SKfW`T:gY@g&lOegm!Xt-v/VS<fcWlA0s2uX3^6L+BP' );
define( 'NONCE_KEY',        'Uvr%rHi2FD:d^xG=ZE}ej0zpu%pN@2_CZ{wl]KVUJdd %Fp8E}OJRtEsd QU_.R(' );
define( 'AUTH_SALT',        '<S.b>H<}}TocWjU5QVUgFpsabGGAd}9%7q2fLgE.r7CDizBl#5D*=qQ2)V?If.lr' );
define( 'SECURE_AUTH_SALT', 'iIP{%v>HPNW%:<z9YR#C*%;HO%;#8E!>N$;;yF9<_tDg+xxt-~X{-j:F1{@Lc{>a' );
define( 'LOGGED_IN_SALT',   '<PS9jKwza>k*HIgFO0-%$8@?6qwSw9zT)scRuO8b!/<L;yGR3U;qj22Sgj#,cfT&' );
define( 'NONCE_SALT',       '*WC;,aV0=lm&&m52dvER!agE1+qiEJ`tM.aPf(#2pyyb>8s|e0Y,tsH_dNggoC!2' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
