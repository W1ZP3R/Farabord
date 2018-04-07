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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'x#OjH QEPuRGkcFoQ&<8EJlRz{Q&n-kWzYrDpu{Jn``VLin1NN0)17/_5-5~8{9?');
define('SECURE_AUTH_KEY',  '9,Q>?3&d IGB3)n-rs7ISKjB+^Evy4CU/Jun]m4YB[Xs>QimHd&,B..1%MB,JG$o');
define('LOGGED_IN_KEY',    'Q{6yxoT8PNSsT0;*ru#tM2%50VxD@o9@5%&(2X@<I {LB8^At~P2D6el0eBN,dbl');
define('NONCE_KEY',        '/>6P?]{uqkAMn]</gv^c*Y5,k?pR=/(c)t:*<4%JQ](F0wU{e,@S,&6)IAMx&ay&');
define('AUTH_SALT',        '0ppG1a10Ex8T-HD8CGLfV3#:`m?$jE=o6c@`(z 0Qu30O`|?}<R4ch:sOhGs[;Ip');
define('SECURE_AUTH_SALT', 'H5cl!C@fb @5[gXA!X*fObhk$&RuM1]*stVn!$h*/~tD9N_8 3zF1n~vgwKGT:zR');
define('LOGGED_IN_SALT',   'ga}yCWw9gf je;P]TndU~!jg;K$quqXo}h~<Pw+{#F3mCHVJiJ7vLw*Yl?uo!pGU');
define('NONCE_SALT',       'SB).lSmJA3mp@_ *Uh<]hN}9n|,?/Hc,;@)xZzI_9%>;0jz*#L=%vn9E1~Z5!t#o');

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
