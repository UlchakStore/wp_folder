<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_base' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O[8v^Ywx9lUn9Na.P23t8dMm3!Ims,XTF!MBOv3?`l=h+dyR:=qv5>+5=^3DCN3T' );
define( 'SECURE_AUTH_KEY',  'O{5G[rG8H!(5(vmnql%bu00;GEvSh4QMTa*@Yo``05!8V<gEQ)w%=u0n.~SidNWh' );
define( 'LOGGED_IN_KEY',    '!DM[Xv^Vb8D_e3{Qe#uGW~HLi/n<b39J&CT$840~@h~DJ0<pm-_NSq<)hvN|r{$&' );
define( 'NONCE_KEY',        '^1}&vhHI}A* QG@H;PZ&Q<@Fw<x:IA>_p8)O5}$$pn``t8mb$(jw@4Tei_KfhyqT' );
define( 'AUTH_SALT',        'gt+ ?}x-t+k[~nj.0;sDayaFuzVYBVRRPE=l0tD^Mv!unLDK;+hu-{ees1C@lEIP' );
define( 'SECURE_AUTH_SALT', 'vJ5Fz-^pn}oI ~W=JMQ:VD5c2&>9]#U#3:ZNV|AFE^_K*g$0$6`2%>^}7e4I>?*A' );
define( 'LOGGED_IN_SALT',   ',U1F,M)_-_>jLIo~Rf&]|f)jSYDa|a*U]Kl&uJ0_uQZ&;RGtRfe2 H6_NI20ny^r' );
define( 'NONCE_SALT',       'yyS>7F5=yy04E5~2oVpkABU5|d.V4R-k@k;<kcgXM2u#dH0/ltym;h7(Shd_Fs_H' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
