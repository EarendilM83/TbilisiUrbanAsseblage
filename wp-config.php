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
define( 'DB_NAME', 'tbilisiurbanasseblage' );

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
define( 'AUTH_KEY',         '?t{(r %]o^055Ct5S4Y>yk3kbkug/(a@CKY`<NMP{]r!|T?s$({OM(%l9;!xE;Ln' );
define( 'SECURE_AUTH_KEY',  '``1zgwE[&t>p90`y|BU-V{5o#np>,>^pLkE/pdU{{hu^kb-I@LC0Cr%,(WAJW~tA' );
define( 'LOGGED_IN_KEY',    'O]w|hu8n#h]a&fqR~^^al3+n!-NX6h$?[}NL$|drdJ)v;BAD:6S?NIU0@./2MVOF' );
define( 'NONCE_KEY',        'RP3L@kbR.5RJ^6`l3J+4&7zFnjEk`=wTBZK9+?:xb-YV)sBp5CVHfkAAc<=k# T7' );
define( 'AUTH_SALT',        'Sh2=*/-TDu~c3,8Ju5~JuqR c6/!lr/%EV&e`v6]`0#M}q5l(dfAv9fSR527Ar/m' );
define( 'SECURE_AUTH_SALT', 'y:+ys81jqYg;IC*QO#MGLy/e?hkx?o`R4QAxToZkEY3f5slk~X,xex}ntzJKt^1$' );
define( 'LOGGED_IN_SALT',   '5W]=>(H:Zl(4Df<EhW6|vT3]42;K{Yy~UpPX<XWzJmPC7va*!p2ASrU!57l$V8UT' );
define( 'NONCE_SALT',       '6n4%,aorB4Ydto4kvk|&)_zby1V[i}b9w@IK#5+!l6*XdhGu{Na#F|G?Zb<! BWc' );

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
