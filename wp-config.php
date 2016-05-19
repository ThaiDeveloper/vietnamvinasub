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
define('DB_NAME', 'vienamvisahub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'gnaht123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DMEuWg6V]KrYvK]`|KFQ=f (8GWOJ8<c0mB<P(hgA4-e-y7Qfz~n._OT2$MI{9w9');
define('SECURE_AUTH_KEY',  'N+-dADu5n!UTM1[d@-d.axOqFZ6FOCOa&Tf+4Nhc#n+5p{COJ -sr5TQ2Ez(tc-8');
define('LOGGED_IN_KEY',    'r4YQ]]MZT&#mO>W/j`+MoVL( hf:tiVV-Tj>KlJ. XZJAR+e>~Hk[?jNnQ|CG`Ck');
define('NONCE_KEY',        'Do]+iZmQE[|}K<+v&g4 fS>(m&VqVO:MR5Ekk|?f3n~^Lv9>@l(F~6l-j5V]FA])');
define('AUTH_SALT',        ';^-qUU<M4fB?X3&n?c_2Ap?|(3!{EG2{@l{C]GJ2k%|oi6;|!:#-~09{9:% czM{');
define('SECURE_AUTH_SALT', ']peYGsKw5:rPS_X*&@A$]k7]dfJHjy{KU#Y-diq7L2&/r }d-2GTxak.$Dk:Drw/');
define('LOGGED_IN_SALT',   'Qa{XrW?Cjr~[]kS4DvOUtsp2q]58Y}jn~aFWje>, =FC`#Ug; 9^0@_H#>mL[V#M');
define('NONCE_SALT',       'uQqW|WOcg-5 >9:5D:G|Poe>O|^c`WY0NRmvUC{oA><LqN{+=h}z`e[xhX;f1DK{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

