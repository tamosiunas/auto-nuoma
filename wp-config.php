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
define('DB_NAME', 'auto-nuoma');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+sU F;JKqPaV;s;;c5sITnicP7`pLRGc26g<_yQN)fXBDLOf/|DgOM@6#$d{A[pk');
define('SECURE_AUTH_KEY',  '(vEox3t,Bqn(Avk.J#Ug$Y@C5K=ud[)D$CnNQr?nfw!Co(,`0>M|kFFZ-*Lc2s(j');
define('LOGGED_IN_KEY',    'k6u.p7{IS7&-+$#&H>_2U?V5I95&*>Eq~Yaq7{v<>kLpy*!S& [nu ozrRdjSMk}');
define('NONCE_KEY',        '[[VSUXR&#:EBBM,|2S-!l{N9H!:2b$E7fCkSL1c%:PLmp8m*C4DuS-h5scut;3Fp');
define('AUTH_SALT',        '4sJ#=%#,9eQp*!Zc<Ph_yi7v^%@7UTZ7:?j=LkZ{Jr>y-K(n%.XRFOoE`*Rw,<h_');
define('SECURE_AUTH_SALT', 'KurYIw!{JaA(8GRTEIUA<cKQzz{j[6& #A:=|;S0K`tCb%;[(94z$*dfbuil.wAd');
define('LOGGED_IN_SALT',   '}NB~[;7(!ZTJfo>p|eP{WnGuAHn3I--nQ(R6{d!w6G= u;~H*^3Q.t|b_}p(x$@~');
define('NONCE_SALT',       'HV<hu`>mM*GeSzcghDPHc`G~*L}?+OUpFq:@^^P=Iwq9D~yO{j=W+ne*p)WEmneA');

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
