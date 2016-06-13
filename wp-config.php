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
define('DB_NAME', 'look2us_dbl2b');

/** MySQL database username */
define('DB_USER', 'look2us_usel2b');

/** MySQL database password */
define('DB_PASSWORD', 'tDN*a.N@4a@+');

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
define('AUTH_KEY',         'Zz4zUDkGZ`$Wy{cjHiR)9(^NV{cz%/E5dCf/P?L8s~L[}kGETCxz,VKZvV&*5!;6');
define('SECURE_AUTH_KEY',  'W|t[b2sHcNA9R{zZw:AiBW%c%viPx|8FaQX$9nC{Je#s)*:)A[C3Q{lVJPLIXn]>');
define('LOGGED_IN_KEY',    '>$%{?vJ*yOaafc%W!hQ+h(QKr%Vr$=xSs^$?Zi^:`gw*W;$wZmFFf^lch!wVJ0=A');
define('NONCE_KEY',        ',kZvh}fnDs):H}3ny(:rKWSc:TB!4++NO!6Rp&N *|?XJ>&k]v7*{B+&uu Z7fYH');
define('AUTH_SALT',        'uMLXTmOwdH3-Qwo8eKR>gx3EEkXXez2WG$pv`WP*(?PKOs3 ~m}?6KeGs?jPRlyc');
define('SECURE_AUTH_SALT', 'U1ObwTKKF_ASRHHX>J{hR1za})Y#x=P<Gm~<xDKo{k7W=f?irX+IaI3W<qD{p}&V');
define('LOGGED_IN_SALT',   '`X5F~s4o7LxG=9!IpZ-1 Yp<xoO3]p1Ev*&b4%YP^[dP^l1.>Pm5#P1dtfuN Q:,');
define('NONCE_SALT',       'b]86>t`xhl?x2unBrgGpI#&<-uq_l$8ZXse)yQd;_  nHTSh5&wafD@Gk;MeMubR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_demo1';

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
