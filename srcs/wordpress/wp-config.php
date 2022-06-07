<?php
/**
 * The base configuration for WordPress
 * wordpress 설치를 위한 구성 파일(db 연결 세부 정보, 다양한 구성 옵션 설정)
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mariadb');

/** MySQL database username */
define( 'DB_USER', 'sorkim');

/** MySQL database password */
define( 'DB_PASSWORD', 'sorkim');

/** MySQL hostname */
define( 'DB_HOST', 'mariadb');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 * 워드프레스 인증 키, 솔트 랜덤 값
 * 보안 관련 키 값, 주기적으로 변경 해줘야 함
 */
define('AUTH_KEY',         '4)+;y>k$w-/(5*U#>kw0k6tl<%wpW,C+XE(mZItcM^eZUV!*vJ;$[|omk4o[y|.U');
define('SECURE_AUTH_KEY',  'j-+]qM+QV$q$MzN412BiZNFhk>)Gu}4ZU>+5RrafZuDt?]/+1ci.Acz]+>tlzQoL');
define('LOGGED_IN_KEY',    'a~7j8ObOWM|-;_IK!ZxV!A%:r} tTt48M8LlQE+Rti^H82DRk1LJ<@ZY69=~.Hz}');
define('NONCE_KEY',        'E;dt+e1IIT }UnnwjY.lP,DLhK;iA1Pjf-bAoWJ[JD?M yi}f4:(|ar=KC F)dkg');
define('AUTH_SALT',        'VB`@G7-(*[#aFQ5*cD8P]!Yk+wwV&-[xL+NK2w@sP@S(|.Q}>XXxiu-m=!ktS639');
define('SECURE_AUTH_SALT', '_2l)_h:f4^0,gv19_w;Rj+|s_wuLVY]>YsW :^2(Het8p|4q/g1R&`!Y}:Mu|s[)');
define('LOGGED_IN_SALT',   ',_ou`g5u+IjV8D_7:QS#fvzf,zrs$&Kv|R6jtiDqaST15KWAo|y=lczoK9=xAMOS');
define('NONCE_SALT',       'jo5g963.Qv.H^~!^C-Ez:gQn!?-lDT|M=||y*++w|W*#4W,X9gRJASb0S[FZT+xy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>