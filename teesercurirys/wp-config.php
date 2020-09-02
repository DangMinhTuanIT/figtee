<?php
define( 'FORCE_SSL_ADMIN', false );
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)  
    $_SERVER['HTTPS']='on';
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'figtee_com' );

/** Username của database */
define( 'DB_USER', 'moteefe2020' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'Anhtuan@8010' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|Ok+uDkyy#J`)goq!t=}TAq6pm$3f)6ePyGa8L) V$5v?X.A8Mw)]Q6rxvlb0xzZ' );
define( 'SECURE_AUTH_KEY',  ']g=G7Y,|Skxz:?F/YQ2!-y(fuzr)!#0<.Nrh6MD}`YX8Bl~+5+Obfs:&oY;/Afs@' );
define( 'LOGGED_IN_KEY',    'mn3N*T]uj+fDt|K]_3B,VG?s tI&frA9#!qSt_A>)FVPkj#7SX1oTnoZpfW(g}$?' );
define( 'NONCE_KEY',        '=aZ#3y5cPa*>MQFVf1TV1fs<Jx7#T/y|V`dhIaPuc?A`)xr:ivK9x8;p4k1*3/7Z' );
define( 'AUTH_SALT',        'rs{sbkv504h<kUAPo*F+x?-iRVhrDT+GVP,:5C<iRU>i|8-p*U~^X^YrSG+$Wtnl' );
define( 'SECURE_AUTH_SALT', '!%)dB$];6&1add3v/9TQ6GM/6AwIkN~LRgl-EjlCNh2-{|d3BfP-Q2|{M4ZXi&O#' );
define( 'LOGGED_IN_SALT',   'zNxyI[CY DI{H^^}Z{-8-Bim+ZRC^p?Z4wSPTlGqOf-XG7p;pTkw9o$tXr(_ DXK' );
define( 'NONCE_SALT',       'p)|I^>EQRR)kn[[,D>o@]@/<cb<Lz=d;L1mA]Ui/V0&sw#*ju|Y|!O)[Pml[(EJg' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'moteefe_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
