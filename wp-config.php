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
define('DB_NAME', 'jade_jason');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Xbi_tC~PSjurL(|Y_tZ0nByejFxrZ+khjvSo[3v%nDpJs0:}Dh|$94l_hNeOM):]');
define('SECURE_AUTH_KEY',  'UBCQNGfPn]}`UvZvgA>`IA&V?TNB+ZwkQRWQ!]:/S0|VUSD^wcBB&*xZ@N*-ARW-');
define('LOGGED_IN_KEY',    '3))SCPmeQ?Z},@^2`]5z2[zj6}n%>EYnV=f[2r&P_@1j>Io:-Z8mT@51;0D*-pZq');
define('NONCE_KEY',        'KKxDAdN_m5KgX;E5>Yg]o:6_ b]-B/WI~~weMu!2dfHdtQ5?H}$wr.B>^5YHk{r~');
define('AUTH_SALT',        '_ mb|fC4zP8^k4/Smbegk:s%UqXEHaE73=E_b;$8 jNow)iJ*5WlCaB|Nc#qfMER');
define('SECURE_AUTH_SALT', '+rq[mT&A+*ohX*l}!vmR>$;QLOorzH&+Y[+c++dI%G4i*wX| 3X~h!$R-%|JCk6n');
define('LOGGED_IN_SALT',   '0, ,_5qMJ50-7rQh.o2z^]]af@~4@wZ_;)36urus!${*O^:3V?:4[c?ccaY5)ebz');
define('NONCE_SALT',       '+~,,$NYM1]Thqa]u;B/G0)+bVbOJ&-d[9#_=JhUkU%TrwY#pVj~<%(9=Ok2uu6Pd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jj_';

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
