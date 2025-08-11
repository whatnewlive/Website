<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sowndharya whatsnot' );

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
define( 'AUTH_KEY',         'IA38wf:.Vl4Z)R?h~{)J9eXwWF|U0 5W}3#zS:=~>D1^(Ab+JC8`}=^<?1]LqpZV' );
define( 'SECURE_AUTH_KEY',  'e..4YK0w4p<#B>u/yn1%`[!EeMxu;::<wj^8&Ml|U3D.4x77aD=PyC|lf82qvS[M' );
define( 'LOGGED_IN_KEY',    'tDw=@C8(6dBU[=;zxApPjLa]P?7G9-_D<[r>Y2D_kr`#J3eMaA~W)f;Y?S]97(.E' );
define( 'NONCE_KEY',        'S@mJJud]d]{ yKG>j)6?}dG1eo@xJq3j.?zJZQEr>7n&3!LBLV sAVw]DBUJYWEv' );
define( 'AUTH_SALT',        'Ry|B`tv![+)-DTf_sP [2-kZSt.eUdtP^T_..jJ1l(i1~v9~-|/+JQBWItwNTg~^' );
define( 'SECURE_AUTH_SALT', 'Q$s{DD0veM_x; lMW,pE86<g$9&%1^o>Au4v5>_5Idk(w`O3nO~SSZ&sGgr1oO?y' );
define( 'LOGGED_IN_SALT',   '!{XwhhtlgElM9yX~^ C%tP.m8?[Gr]?n:6]8|HYO1OPOufmhT%VRrn}vF~z^ M8f' );
define( 'NONCE_SALT',       'qSUG!|Qooy_|EEjK`,e>3egTAJId@EHd_Ck{)HT:@0GFL]$p/p3h{fza+VD:Nh]L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
