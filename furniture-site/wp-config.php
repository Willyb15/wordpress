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
define('DB_NAME', 'furniture');

/** MySQL database username */
define('DB_USER', 'x');

/** MySQL database password */
define('DB_PASSWORD', 'x');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'S<aN.FJ7jL}M<J+> /?/rGpe;(u5>6Vngt(s<D[Y>!~pheMHV~-X:(A<l5LJ>1In');
define('SECURE_AUTH_KEY',  'M;pd QCp+ftCTRF0,+<.13wCu^fIfu^rz2%b^;UUI~/#w_p`/Sz7&mg/>YJQ#cB<');
define('LOGGED_IN_KEY',    'hKIGAe>:YNgi)-trHm0&~Nn}ZUC.C5wD+x-yP|.yz}f=Wv;2QX{zqfGHkzr*R) 8');
define('NONCE_KEY',        '5:|bT^CDSZ}*}c?Z*/ldM3Cz4;|3+$M8]zQ8x}Gm&SR>wYAB:7Ei1OH,qW.Xx|,2');
define('AUTH_SALT',        'KPoyV-1M%pH{H*TBi~fWUBZ;If@FDxz~j.b-vEWg<UfQ`cM#U&F%GVfY..#@)YW,');
define('SECURE_AUTH_SALT', 'NwdL<VoCS^VRBf6e+(<E{mNKQu;$)JsXDN3;AJVByIEVKdl{H>J;bn_o)-4;J0^G');
define('LOGGED_IN_SALT',   'ph_tzZ3132{Dse)?n2+}~5BEE{U7@d4c2%~?j::s_cM7 >O]|oeG,YlMngqA<sTG');
define('NONCE_SALT',       'E!E3$C/W[3|)^y_RfdB%p=%cP|UA<=AEOv/i&;Nz_w`Nr*@SKWe|G^X&>+$7%+w7');

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