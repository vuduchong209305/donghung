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
define('DB_NAME', 'donghung');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'f`v$N-NHTm2pCXeL^c{IE[m/,29dF{X;_s;Y{?qM.+$pfRpyYU;G[^eaQb$$<IUp');
define('SECURE_AUTH_KEY',  'cKW}4Yaz7b%n%%0r5SOX[.yJb{1c]`GaSv5=3!wc+PgBk!(A/Z]pM{G~8+4m-Tcg');
define('LOGGED_IN_KEY',    ',GaC :O9w0sT;N3ctrYYy5s~>d(^Y2cS(gAX$rhB.V8E|S5^ucA> Ayd!byUNF_m');
define('NONCE_KEY',        'ui,<N8R[lF6xHh%WB*^l7AXu.nywQ]Q8hvGGI6#fR3)#0L__^J^]lP*?p_sc9Ihr');
define('AUTH_SALT',        'tsKw<{I6mqD_S6kxZ31[P?xEy[ P/`.v(5j3MpQ3ht!1j+agiu@|BPzgW9rJU^=m');
define('SECURE_AUTH_SALT', 'zXlI2l[14aW3jv-W7]bW)DQM#l4hR*LhWM,:R,XF;ocnEmO)<i33|;<$pVj(U=6&');
define('LOGGED_IN_SALT',   ';j]510ghN-,7qn:xCRQNI+d{ff5tPYSkfn3vKiM999C8i[mga+(*X12g;7`#sOI*');
define('NONCE_SALT',       '=X>o2ot|;,KJY&8ubkh5sz@_ST$~}drSFY-+|(j@YZw<`7buQ%3OL?F,TH,-cw,y');

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
define('FS_METHOD','direct');