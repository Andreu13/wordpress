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
define('DB_NAME', 'word press');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@I#Msx6P!5K,@.F<[Px>I^)1VPz:Fk%FWjP,OjInUEf1;}+8m@|<|^~@ YGU`xeF');
define('SECURE_AUTH_KEY',  '^F6]I{C+5],Um~pS{duQIBH!E9O6O>~t=4J|/CVd7j]e*^]`2GVd@3|e4TU(P]Sa');
define('LOGGED_IN_KEY',    '0,I_Yvs,Nb1|sbDx3f;&;/WU]H7G3jyvyEnWNZpo @=E8>h9^]GI0JR|<{*cw[v+');
define('NONCE_KEY',        'G}V7{MWzn)w{0l=2H%hZOk!Z8P~Maf}*I7E*)v]oAxD$Zq_pqT2{u;qGSMEU|:R7');
define('AUTH_SALT',        'y=G1T]?3Y,8|].5j!x*ex,]xemc_LUji&(z`%B2nol@L@RG7HHC0fNoRxpN u.RW');
define('SECURE_AUTH_SALT', 'aNh0K*8dJ/GTASGh e:./}i#A<~X=RdeMuj#MTgo:xs0Pa]kZdEn>J04d{BF+N%+');
define('LOGGED_IN_SALT',   'Q_oQ7xGm%w#NNmC93BvPm5wvxWQbvixwl@Fkm}$M?sUN2aZsR5vrK0;8E~,3N@Xm');
define('NONCE_SALT',       'VUThXR[=)wy`A:t:bO/?z1SZQVI4&-G#hWYv3]q_]B8dgi_B1XRA@(~jKQXQ0v0}');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
