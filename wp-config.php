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
define('DB_NAME', 'wordpress-custom-plugin');

/** MySQL database username */
define('DB_USER', 'sonofajones');

/** MySQL database password */
define('DB_PASSWORD', 'Afro_2334');

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
define('AUTH_KEY',         '3<H++ BHa.&Tws}(_q![h>+pc^M]gC (NkT#shmOL|O6#QO?(97n~kFN^$u? O)q');
define('SECURE_AUTH_KEY',  'BUrPX,guKTsA0T(<9$c^7%}~y3H)@/V~DD2<Xit|P{>bIDXqL5v:S}45!@Rsrm`X');
define('LOGGED_IN_KEY',    'kM-kuq9]V@/T{q-}-:C1n;KS5StT_e.>[~LHf-kt1.o[XC(1;4bUIF!3eo]F sWa');
define('NONCE_KEY',        '<l4ER0r;zir[8yX)++&+KW,*+O80KZBESDe#l$iX&O9JGRG=CBU#pXQU^m(zdSyg');
define('AUTH_SALT',        '_x*0K@MMQX@<KWN*HYt]}Pw <[r7 E`A0RCy-T8wFgG8tuh^qBL+0ovk9N)uQdUo');
define('SECURE_AUTH_SALT', 'QIz2y!M)vjPFT 1w/ sr:[7(X.]BRgB~^TLy*TVB#*U$A01)&ZZDh3_4J,0uC;W0');
define('LOGGED_IN_SALT',   '#l+.+|`VD}p-fj;k#<-2.H-xsY4-B%InN-3a]uh7u~2B2;A>UzKIYG;_~^BTGfWf');
define('NONCE_SALT',       'm]oqZq&G/MkD3XpSQoYWym<K;vlh+F47VcP~{1Uz)Ywl/K7 >H%J=R-:<Igi 0gu');

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
