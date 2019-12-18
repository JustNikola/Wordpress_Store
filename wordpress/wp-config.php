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
define('DB_NAME', 'time');

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
define('AUTH_KEY',         ')e rlO?F}p4aEIqj|U0|}$k.ch<TY5(nxh.%aur?xF5bR[C)v&zv8~sY_EL4YS3L');
define('SECURE_AUTH_KEY',  ';[.Q%^5L Bp/@~$Aaqxi]1?Tl(eeW|.M,BJ`Xd18Xqqd]IqxD.)q6,f8K{+rov]p');
define('LOGGED_IN_KEY',    '(b.qrIT vW-{Qr)RL-]Ui=?m+@`U-eicTU:VR@H>=w.]PH?<wyJBDU.+l!Tog]O6');
define('NONCE_KEY',        '4A^1ItU)`E.!z*m&HAMO#ZtOpDs?%WyV&o]WD,VX9[E[,rO6HAvN-nug{#K0Z)[7');
define('AUTH_SALT',        'BsF/!GuI~mRfqd n0hZ 5!Vs[%Y%/*)^f3rH/#Vg9:s=ya35SpVR2O^L 8&X~0m7');
define('SECURE_AUTH_SALT', 'hz^1v?5SIu-H8yP]Znn6U|@ScJ# <ITolyD.;[OKwG!=zn9CCZ/;^O4I2~]y[W?a');
define('LOGGED_IN_SALT',   'WQ?35haYclWXb> qtbpZ ~2AMqUtTct$t7P!MHrxI q{3+AIFg~<g.T&C<N:[?,0');
define('NONCE_SALT',       '0wqbZ-Q5t]4GD(L@4JAmx7i(YK(1GsJQLd.Kc/WR%`O$U>t)wnXANrX_DJw6K[+7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

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
