<?php
// Plantilla segura de ejemplo para Kame Store (NO contiene claves reales)
define( 'DB_NAME', 'kamestore-wp' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost:3307' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'pon-aqui-tu-clave-unica' );
define( 'SECURE_AUTH_KEY',  'pon-aqui-tu-clave-unica' );
define( 'LOGGED_IN_KEY',    'pon-aqui-tu-clave-unica' );
define( 'NONCE_KEY',        'pon-aqui-tu-clave-unica' );
define( 'AUTH_SALT',        'pon-aqui-tu-clave-unica' );
define( 'SECURE_AUTH_SALT', 'pon-aqui-tu-clave-unica' );
define( 'LOGGED_IN_SALT',   'pon-aqui-tu-clave-unica' );
define( 'NONCE_SALT',       'pon-aqui-tu-clave-unica' );

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
