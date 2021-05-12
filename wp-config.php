<?php
define( 'WP_CACHE', true );

$app_env = getenv("APP_ENV");
$file = $app_env == null ? ".env" : ".env.".$app_env;
if(file_exists(__DIR__.'/'.$file))
{
    require_once(__DIR__ . '/vendor/autoload.php');
    (Dotenv\Dotenv::createUnsafeImmutable(__DIR__,$file))->load();
} else {
    error_log("*WARNING* environment file not found: ".$file);
}

$hostname_env = getenv("DB_HOST");
if($hostname_env != null){
    define( 'WP_HOME', 'http://fictional-university.local' );
    define( 'WP_SITEURL', 'http://fictional-university.local' );
}

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
define( 'DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') ?: 'mysql');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', getenv('DB_CHARSET'));

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', getenv('DB_COLLATE'));

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3/2*4({<GerY_=H%X$0pUgveOFmC0P%H!MMl2gkqVdrQ>Hm; nWVQ(vV1*(A2jb<' );
define( 'SECURE_AUTH_KEY',   'I GkJZ<@tJbBifj5Duu]`t|^9V-JiAREv|Q.q9Q:l}%3-62_-wA%oS:RR%c({A)D' );
define( 'LOGGED_IN_KEY',     '#9p`jYXUZbw):e3p7Q8#vI)SrQcFKUt3RK*2K-}7w0y?dz;&7@M^3<)?4i..K@W1' );
define( 'NONCE_KEY',         'z#Cx4>q-2OW%Dz[l.q@x>4(x.KB?7dGZL<PvjL(,]>GwN>`)~n*`I9dik$f%a/]6' );
define( 'AUTH_SALT',         '90En*3/G7]TuYViQG7|KkZXxKY`dT=y]RC:gw|J3j}b&70,YWE?yna$BOsjLxnGY' );
define( 'SECURE_AUTH_SALT',  '}i#g8j}M%x9_WmcD^wobu]phvX>s* kHAMgm`K6OghZvB<]F|My6-EK:/*&wwlw6' );
define( 'LOGGED_IN_SALT',    '3Kw),vls9WcUu`O|OZG)^B!$O{KnW12rlmOlvZcLt,q +:QLoTVG;*Wflk;F[hS$' );
define( 'NONCE_SALT',        'Xr>r{z:VEf+N<k,k8i+v5E+^_yOOu$Q: ,WVFx iFCH$SdYxvQ`Porp{Q`ri[R+;' );
define( 'WP_CACHE_KEY_SALT', '[||;nOf7gjc{^%qmg/Ga!Xs.Ao4s(r=e]VRAY06-M$.8-L`j=M.he? s{QG0OPva' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
