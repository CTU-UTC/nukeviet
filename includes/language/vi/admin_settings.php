<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$lang_translator['author'] = 'VINADES.,JSC <contact@vinades.vn>';
$lang_translator['createdate'] = '04/03/2010, 15:22';
$lang_translator['copyright'] = '@Copyright (C) 2009-2021 VINADES.,JSC. All rights reserved';
$lang_translator['info'] = '';
$lang_translator['langtype'] = 'lang_module';

$lang_module['global_config'] = 'Cấu hình chung';
$lang_module['site_config'] = 'Cấu hình site';
$lang_module['lang_site_config'] = 'Cấu hình site Theo ngôn ngữ: %s';
$lang_module['bots_config'] = 'Máy chủ tìm kiếm';
$lang_module['ip_version'] = 'Loại IP';

$lang_module['site_domain'] = 'Tên miền chính của site';
$lang_module['sitename'] = 'Tên gọi của site';
$lang_module['theme'] = 'Giao diện mặc định cho PC';
$lang_module['mobile_theme'] = 'Giao diện mặc định cho Mobile';
$lang_module['themeadmin'] = 'Giao diện người quản trị';
$lang_module['default_module'] = 'Module mặc định trên trang chủ';
$lang_module['description'] = 'Mô tả của site';
$lang_module['rewrite'] = 'Bật chức năng rewrite';
$lang_module['rewrite_optional'] = 'Loại bỏ biến ngôn ngữ khỏi các url của site';
$lang_module['rewrite_op_mod'] = 'Loại bỏ tên module khỏi các url của site';
$lang_module['disable_content'] = 'Nội dung thông báo site ngưng hoạt động';
$lang_module['submit'] = 'Lưu cấu hình';
$lang_module['err_writable'] = 'Lỗi hệ thống không ghi được file: %s. Bạn cần cấu hình server cho phép ghi file này.';
$lang_module['err_supports_rewrite'] = 'Lỗi, Máy chủ của bạn không hỗ trợ module rewrite';
$lang_module['err_save_sysconfig'] = 'Các thay đổi đã được lưu lại, tuy nhiên hệ thống không ghi được cấu hình ra file. Hãy cấp quyền ghi cho file %s, sau đó thực hiện lại';

$lang_module['security'] = 'Thiết lập an ninh';
$lang_module['flood_blocker'] = 'Chống flood';
$lang_module['is_flood_blocker'] = 'Kích hoạt tính năng chống flood';
$lang_module['max_requests_60'] = 'Số requests tối đa trong 1 phút';
$lang_module['max_requests_300'] = 'Số requests tối đa trong 5 phút';
$lang_module['max_requests_error'] = 'Lỗi: Cần nhập số request lớn hơn 0';
$lang_module['nv_anti_iframe'] = 'Chống IFRAME';
$lang_module['nv_anti_agent'] = 'Chặn các truy cập nếu chuỗi nhận diện User-Agent không được xác định';
$lang_module['nv_allowed_html_tags'] = 'Các thẻ HTML được chấp nhận sử dụng';
$lang_module['nv_debug'] = 'Chế độ nhà phát triển';
$lang_module['nv_debug_help'] = 'Nếu bật chế độ này, hệ thống sẽ hiển thị các lỗi để giúp nhà phát triển dễ dàng kiểm tra trong quá trình lập trình. Nếu website đang hoạt động trên môi trường thật, bạn <strong>nên tắt</strong> tùy chọn này';
$lang_module['domains_restrict'] = 'Giới hạn tên miền ở các thẻ HTML nguy hiểm (iframe, object, embed...)';
$lang_module['domains_whitelist'] = 'Tên miền tin cậy (mỗi tên miền một dòng). Nếu kích hoạt giới hạn tên miền ở mục bên trên, hệ thống sẽ cho phép sử dụng tài nguyên, liên kết từ các tên miền này';
$lang_module['captcha'] = 'Cấu hình hiển thị captcha';
$lang_module['captcha_num'] = 'Số ký tự của captcha hình';
$lang_module['captcha_size'] = 'Kích thước của captcha hình';
$lang_module['recaptcha_ver'] = 'Phiên bản reCaptcha';
$lang_module['recaptcha_sitekey'] = 'Site key của reCaptcha';
$lang_module['recaptcha_secretkey'] = 'Secret key của reCaptcha';
$lang_module['recaptcha_type'] = 'Kiểu reCaptcha (chỉ cho phiên bản 2)';
$lang_module['recaptcha_type_image'] = 'Hình ảnh (nên chọn)';
$lang_module['recaptcha_type_audio'] = 'Âm thanh';
$lang_module['recaptcha_guide'] = 'Nhấp vào đây để lấy thông số Site key và Secret key.';
$lang_module['captcha_for_module'] = 'Kiểu captcha được áp dụng cho các module';
$lang_module['captcha_'] = 'Không sử dụng';
$lang_module['captcha_captcha'] = 'Captcha hình';
$lang_module['captcha_recaptcha'] = 'reCaptcha';
$lang_module['captcha_type_recaptcha_note'] = 'reCaptcha sẽ bị thay bằng Captcha hình cho đến khi bạn khai báo Site key và Secret key của reCaptcha';
$lang_module['select_all_as'] = 'Chọn tất cả là';
$lang_module['captcha_area'] = 'Khu vực áp dụng captcha của module Thành viên';
$lang_module['captcha_area_a'] = 'Admin đăng nhập';
$lang_module['captcha_area_l'] = 'Thành viên đăng nhập';
$lang_module['captcha_area_r'] = 'Khách đăng ký';
$lang_module['captcha_area_m'] = 'Khách khôi phục mail kích hoạt';
$lang_module['captcha_area_p'] = 'Khách thay mật khẩu';
$lang_module['captcha_comm'] = 'Đối tượng áp dụng captcha khi tham gia Bình luận';
$lang_module['captcha_comm_0'] = 'Không hiển thị';
$lang_module['captcha_comm_1'] = 'Nếu không phải là thành viên';
$lang_module['captcha_comm_2'] = 'Nếu không phải người quản lý bình luận';
$lang_module['captcha_comm_3'] = 'Hiển thị trong mọi trường hợp';
$lang_module['captcha_comm_select'] = 'Hãy chọn';

$lang_module['mail_sender_name'] = 'Tên người gửi';
$lang_module['mail_sender_name_default'] = 'Để trống hệ thống sẽ lấy từ giá trị được chỉ định (nếu có) hoặc tên site';
$lang_module['mail_sender_email'] = 'Email người gửi';
$lang_module['mail_sender_email_default'] = 'Để trống hệ thống sẽ lấy từ giá trị được chỉ định, email hệ thống hoặc email site tùy phương thức gửi mail. Lưu ý: Giá trị này có thể không có tác dụng tùy theo máy chủ gửi hoặc máy chủ nhận';
$lang_module['mail_reply_name'] = 'Tên người nhận phản hồi';
$lang_module['mail_reply_name_default'] = 'Khi không có tham số truyền vào lúc gửi mail, hệ thống sẽ lấy giá trị này. Bỏ trống hệ thống sẽ lấy từ tên site';
$lang_module['mail_reply_email'] = 'Email nhận phản hồi';
$lang_module['mail_reply_email_default'] = 'Khi không có tham số truyền vào lúc gửi mail, hệ thống sẽ lấy giá trị này. Bỏ trống hệ thống sẽ lấy từ email của site';
$lang_module['mail_force_sender'] = 'Cố định người gửi. Dùng để ép tất cả thông tin người gửi có giá trị theo cấu hình tại đây thay vì thông tin trong mỗi lần gửi';
$lang_module['mail_force_reply'] = 'Cố định người nhận phản hồi. Dùng để ép tất cả thông tin người nhận phản hồi có giá trị theo cấu hình tại đây thay vì thông tin trong mỗi lần gửi';
$lang_module['ftp_config'] = 'Cấu hình FTP';
$lang_module['smtp_config'] = 'Cấu hình gửi mail';
$lang_module['server'] = 'Máy chủ hoặc Url';
$lang_module['port'] = 'Port';
$lang_module['username'] = 'User name';
$lang_module['password'] = 'Password';
$lang_module['ftp_path'] = 'Remote path';
$lang_module['mail_config'] = 'Lựa chọn phương thức';
$lang_module['type_smtp'] = 'SMTP';
$lang_module['type_linux'] = 'Linux Mail';
$lang_module['type_phpmail'] = 'PHPmail';
$lang_module['smtp_server'] = 'Cấu hình máy chủ gửi mail';
$lang_module['incoming_ssl'] = 'Sử dụng Xác thực';
$lang_module['verify_peer_ssl'] = 'Ssl verify peer';
$lang_module['verify_peer_ssl_yes'] = 'Có';
$lang_module['verify_peer_ssl_no'] = 'Không';
$lang_module['verify_peer_name_ssl'] = 'Ssl verify name peer';
$lang_module['outgoing'] = 'Máy chủ (SMTP) Thư Gửi đi';
$lang_module['outgoing_port'] = 'Cổng gửi mail';
$lang_module['smtp_username'] = 'Tài khoản gửi mail';
$lang_module['smtp_login'] = 'Tên Tài khoản';
$lang_module['smtp_pass'] = 'Mật khẩu';
$lang_module['smtp_error_openssl'] = 'Lỗi: Máy chủ của bạn không hỗ trợ gửi mail qua ssl';
$lang_module['smtp_test'] = 'Kiểm tra cấu hình';
$lang_module['smtp_test_subject'] = 'Email thử nghiệm';
$lang_module['smtp_test_message'] = 'Đây là email thử nghiệm để kiểm tra cấu hình gửi mail. Đơn giản bạn hãy xóa nó đi!';
$lang_module['smtp_test_success'] = 'Gửi email thành công';
$lang_module['smtp_test_fail'] = 'Gửi email thất bại';
$lang_module['smtp_test_note'] = 'Lưu ý: Nhấp lưu cấu hình nếu có thay đổi ở form trên trước khi kiểm tra cấu hình';
$lang_module['notify_email_error'] = 'Tạo cảnh báo hệ thống khi gửi email thất bại';
$lang_module['bot_name'] = 'Tên máy chủ ';
$lang_module['bot_agent'] = 'UserAgent của máy chủ';
$lang_module['bot_ips'] = 'IP của máy chủ';
$lang_module['bot_allowed'] = 'Quyền xem';
$lang_module['site_keywords'] = 'Từ khóa cho máy chủ tìm kiếm';
$lang_module['site_logo'] = 'Logo của site';
$lang_module['site_banner'] = 'Banner của site';
$lang_module['site_favicon'] = 'Favicon của site';
$lang_module['site_email'] = 'Email của site';
$lang_module['error_set_logs'] = 'Ghi lại lỗi của hệ thống';
$lang_module['error_send_email'] = 'Email nhận thông báo lỗi';
$lang_module['lang_multi'] = 'Kích hoạt chế độ đa ngôn ngữ';
$lang_module['lang_geo'] = 'Bật nhận dạng ngôn ngữ theo quốc gia';
$lang_module['lang_geo_config'] = 'Cấu hình nhận dạng ngôn ngữ theo quốc gia';
$lang_module['site_lang'] = 'Ngôn ngữ mặc định';
$lang_module['site_timezone'] = 'Múi giờ của site';
$lang_module['current_time'] = 'Giờ hiện tại: %s';
$lang_module['date_pattern'] = 'Kiểu hiển thị ngày tháng năm';
$lang_module['time_pattern'] = 'Kiểu hiển thị giờ phút';
$lang_module['gzip_method'] = 'Bật chế độ gzip';
$lang_module['proxy_blocker'] = 'Chặn truy cập bằng proxy';
$lang_module['proxy_blocker_0'] = 'Không chặn';
$lang_module['proxy_blocker_1'] = 'Ở cấp độ nhẹ';
$lang_module['proxy_blocker_2'] = 'Ở cấp độ vừa';
$lang_module['proxy_blocker_3'] = 'Tuyệt đối';
$lang_module['str_referer_blocker'] = 'Kích hoạt tiện ích kiểm tra và chuyển hướng các REFERER bên ngoài đến trang chủ';
$lang_module['my_domains'] = 'Các domain của site, cách nhau bởi dấu phảy';
$lang_module['searchEngineUniqueID'] = 'Google search Engine ID<br />(Có định dạng kiểu như 000329275761967753447:sr7yxqgv294, <a href="http://nukeviet.vn/vi/faq/Su-dung-Google-Custom-Search-tren-NukeViet/" target="_blank">xem chi tiết</a>)';

$lang_module['variables'] = 'Cấu hình cookie, session';
$lang_module['cookie_prefix'] = 'Tiến tố cookie';
$lang_module['session_prefix'] = 'Tiền tố session';
$lang_module['live_cookie_time'] = 'Thời gian tồn tại của cookie';
$lang_module['live_session_time'] = 'Thời gian tồn tại session';
$lang_module['live_session_time0'] = '=0 Tồn tại đến khi đóng trình duyệt';
$lang_module['cookie_secure'] = 'cookie secure';
$lang_module['cookie_httponly'] = 'cookie httponly';
$lang_module['cookie_SameSite'] = 'cookie SameSite';
$lang_module['cookie_secure_note'] = 'Cookie chỉ được gửi đến máy chủ khi một yêu cầu được thực hiện với giao thức https hoặc ở môi trường localhost';
$lang_module['cookie_httponly_note'] = 'Cấm JavaScript truy cập vào cookie, ví dụ thông qua thuộc tính Document.cookie';
$lang_module['cookie_SameSite_note'] = 'Cho phép kiểm soát việc trình duyệt gửi cookie khi trang gửi yêu cầu đến một miền khác';
$lang_module['cookie_SameSite_note2'] = 'Thuộc tính này chỉ có hiệu lực khi phiên bản php của máy chủ >= 7.3';
$lang_module['cookie_SameSite_Empty'] = 'Phụ thuộc vào trình duyệt';
$lang_module['cookie_SameSite_Lax'] = 'Cookie không được gửi theo các yêu cầu phụ đến trang web khác (ví dụ: tải hình ảnh), nhưng được gửi theo các yêu cầu đến trang web gốc';
$lang_module['cookie_SameSite_Strict'] = 'Cookie sẽ chỉ được gửi theo yêu cầu được thực hiện trên cùng một miền và sẽ không được gửi theo yêu cầu đến các trang web của bên thứ ba';
$lang_module['cookie_SameSite_None'] = 'Cookie sẽ được gửi trong tất cả các ngữ cảnh (Chỉ có tác dụng khi thuộc tính secure bật)';

$lang_module['is_user_forum'] = 'Chuyển quản lý thành viên cho diễn đàn';
$lang_module['banip'] = 'Quản lý IP cấm';
$lang_module['banip_ip'] = 'Ip';
$lang_module['banip_timeban'] = 'Thời gian bắt đầu';
$lang_module['banip_timeendban'] = 'Thời gian kết thúc';
$lang_module['banip_funcs'] = 'Chức năng';
$lang_module['banip_checkall'] = 'Chọn tất cả';
$lang_module['banip_uncheckall'] = 'Bỏ chọn tất cả';
$lang_module['banip_title_add'] = 'Thêm địa chỉ IP cấm';
$lang_module['banip_title_edit'] = 'Sửa địa chỉ IP cấm';
$lang_module['banip_address'] = 'Địa chỉ';
$lang_module['banip_begintime'] = 'Thời gian bắt đầu cấm';
$lang_module['banip_endtime'] = 'Thời gian bắt kết thúc';
$lang_module['banip_notice'] = 'Ghi chú';
$lang_module['banip_confirm'] = 'Chấp nhận';
$lang_module['banip_mask_select'] = 'Hãy chọn';
$lang_module['banip_area'] = 'Khu vực';
$lang_module['banip_nolimit'] = 'Vô thời hạn';
$lang_module['banip_area_select'] = 'Hãy chọn khu vực';
$lang_module['banip_noarea'] = 'Chưa xác định';
$lang_module['banip_del_success'] = 'Đã xóa thành công !';
$lang_module['banip_area_front'] = 'Ngoài site';
$lang_module['banip_area_admin'] = 'Khu vực admin';
$lang_module['banip_area_both'] = 'Cả admin và ngoài site';
$lang_module['banip_delete_confirm'] = 'Bạn có chắc muốn xóa ip này ra khỏi danh sách bị ban?';
$lang_module['banip_mask'] = 'Mask IP';
$lang_module['banip_edit'] = 'Sửa';
$lang_module['banip_delete'] = 'Xóa';
$lang_module['banip_error_ip'] = 'Hãy nhập Ip cần ban';
$lang_module['banip_error_area'] = 'Bạn cần chọn khu vực';
$lang_module['banip_error_validip'] = 'Lỗi: Bạn cần nhập IP đúng chuẩn';
$lang_module['banip_error_write'] = 'Lỗi: hệ thống không thể ghi file. Hãy CHMOD thư mục <strong>%s</strong> ở chế độ 0777 hoặc "Change permission" để hệ thống có thể ghi file. Bạn cũng có thể tự tạo file banip.php với nội dung bên dưới và đặt vào thư mục <strong>%s</strong>';

$lang_module['nv_admin_add'] = 'Thêm công việc';
$lang_module['nv_admin_edit'] = 'Sửa công việc';
$lang_module['nv_admin_del'] = 'Xóa công việc';
$lang_module['cron_name_empty'] = 'Bạn chưa khai báo tên của công việc';
$lang_module['file_not_exist'] = 'File mà bạn khai báo không tồn tại';
$lang_module['func_name_invalid'] = 'Bạn chưa khai báo tên hàm hoặc tên hàm không đúng quy định';
$lang_module['func_name_not_exist'] = 'Tên hàm bạn khai báo không tồn tại';
$lang_module['nv_admin_add_title'] = 'Để thêm công việc, bạn cần khai báo đầy đủ vào các ô trống dưới đây';
$lang_module['nv_admin_edit_title'] = 'Để sửa công việc, bạn cần khai báo đầy đủ vào các ô trống dưới đây';
$lang_module['cron_name'] = 'Tên công việc';
$lang_module['file_none'] = 'Không kết nối';
$lang_module['run_file'] = 'Kết nối với file thực thi';
$lang_module['run_file_info'] = 'File thực thi phải là một trong những file được chứa trong thư mục &ldquo;<strong>includes/cronjobs/</strong>&rdquo;';
$lang_module['run_func'] = 'Kết nối với hàm thực thi';
$lang_module['run_func_info'] = 'Hàm thực thi phải được bắt đầu bằng &ldquo;<strong>cron_</strong>&rdquo;';
$lang_module['params'] = 'Thông số';
$lang_module['params_info'] = 'Phân cách bởi dấu phẩy';
$lang_module['interval'] = 'Lặp lại công việc sau';
$lang_module['interval_info'] = 'Nếu chọn &ldquo;<strong>0</strong>&rdquo;, công việc sẽ được thực hiện 1 lần duy nhất';
$lang_module['start_time'] = 'Thời gian bắt đầu';
$lang_module['min'] = 'phút';
$lang_module['hour'] = 'giờ';
$lang_module['day'] = 'ngày';
$lang_module['month'] = 'tháng';
$lang_module['year'] = 'năm';
$lang_module['is_del'] = 'Xóa sau khi thực hiện xong';
$lang_module['isdel'] = 'Xóa';
$lang_module['notdel'] = 'Không';
$lang_module['is_sys'] = 'Công việc được tạo bởi';
$lang_module['system'] = 'Hệ thống';
$lang_module['client'] = 'Admin';
$lang_module['act'] = 'Tình trạng';
$lang_module['act0'] = 'Vô hiệu lực';
$lang_module['act1'] = 'Hiệu lực';
$lang_module['last_time'] = 'Lần thực hiện gần đây';
$lang_module['next_time'] = 'Lần thực hiện sắp tới';
$lang_module['last_time0'] = 'Chưa thực hiện lần nào';
$lang_module['last_result'] = 'Kết quả của lần thực hiện gần đây';
$lang_module['last_result_empty'] = 'n/a';
$lang_module['last_result0'] = 'Tồi';
$lang_module['last_result1'] = 'Đã hoàn thành';
$lang_module['cron_interval_type'] = 'Kiểu lặp lại (nếu có)';
$lang_module['cron_interval_type0'] = 'Sau thời gian khởi chạy trong CSDL';
$lang_module['cron_interval_type1'] = 'Sau thời gian khởi chạy thực tế';
$lang_module['cron_launcher_interval'] = 'Lặp lại việc kiểm tra và thực thi công việc sau mỗi';
$lang_module['cron_launcher'] = 'Kiểm tra và thực thi công việc bằng';
$lang_module['cron_launcher_system'] = 'Công cụ của hệ thống';
$lang_module['cron_launcher_server'] = 'Dịch vụ cron phía máy chủ';
$lang_module['cron_launcher_server_note'] = 'Bạn có thể sao chép mã bên dưới và dán vào crontab của mình.';
$lang_module['cron_last_time'] = 'Lần kiểm tra và thực thi công việc gần đây là %s';
$lang_module['cron_next_time'] = 'Lần kiểm tra và thực thi công việc tiếp theo dự kiến vào lúc %s';
$lang_module['closed_site'] = 'Chế độ đóng cửa site';
$lang_module['closed_site_0'] = 'Site hoạt động bình thường';
$lang_module['closed_site_1'] = 'Đóng cửa site đối với tất cả, ngoại trừ Quản trị tối cao';
$lang_module['closed_site_2'] = 'Đóng cửa site đối với tất cả, ngoại trừ người điều hành chung';
$lang_module['closed_site_3'] = 'Đóng cửa site đối với tất cả, ngoại trừ quản trị viên';
$lang_module['closed_site_reopening_time'] = 'Thời gian dự kiến mở lại';
$lang_module['ssl_https'] = 'Chuyển hướng các yêu cầu HTTP sang HTTPS';
$lang_module['ssl_https_module'] = 'Các module kích hoạt SSL';
$lang_module['ssl_https_0'] = 'Không';
$lang_module['ssl_https_1'] = 'Áp dụng trên toàn bộ site';
$lang_module['ssl_https_2'] = 'Áp dụng trong khu vực quản trị';
$lang_module['note_ssl'] = 'Bạn có chắc chắn site bạn hỗ trợ https không? Nếu không hỗ trợб sẽ không truy cập được các khu vực tương ứng sau khi lưu';
$lang_module['timezoneAuto'] = 'Theo múi giờ trên máy tính hoặc điện thoại của khách truy cập';
$lang_module['timezoneByCountry'] = 'Theo múi giờ quốc gia của khách truy cập';
$lang_module['allow_switch_mobi_des'] = 'Cho phép chuyển đổi giao diện mobile, desktop';
$lang_module['allow_theme_type'] = 'Các loại giao diện được sử dụng';
$lang_module['ftp_auto_detect_root'] = 'Xác định tự động';
$lang_module['ftp_error_full'] = 'Hãy nhập đủ các thông số để tự động nhận diện Remote path';
$lang_module['ftp_error_detect_root'] = 'Không thể tìm thấy thông số nào phù hợp. Hãy kiểm tra lại tên đăng nhập và mật khẩu';
$lang_module['ftp_error_support'] = 'Máy chủ của bạn đang chặn hoặc không hỗ trợ thư viện FTP. Hãy liên hệ với nhà cung cấp để được kích hoạt.';
$lang_module['static_url'] = 'Hosting chứa các tệp tĩnh';
$lang_module['static_url_note'] = 'Để trống hoặc điền vào tên miền của hosting chứa các tệp tĩnh không phải là một trong các miền hoặc miền phụ của site. Cấu trúc thư mục của hosting này cần phải giống với cấu trúc thư mục của site';
$lang_module['cdn_url'] = 'Hosting CDN cho javascript, css';
$lang_module['remote_api_access'] = 'Bật Remote API';
$lang_module['remote_api_access_help'] = 'Nếu tắt toàn bộ quyền truy cập API từ bên ngoài sẽ bị chặn. Các API bên trong vẫn sử dụng bình thường';
$lang_module['remote_api_log'] = 'Ghi lại nhật ký Remote API';

$lang_module['plugin'] = 'Thiết lập Plugin';
$lang_module['plugin_file'] = 'File thực thi';
$lang_module['plugin_area'] = 'Hook';
$lang_module['plugin_viewarea'] = 'Xem theo Hook';
$lang_module['plugin_number'] = 'Ưu tiên';
$lang_module['plugin_func'] = 'Chức năng';
$lang_module['plugin_add'] = 'Thêm plugin';
$lang_module['plugin_status_ok'] = 'Tương thích';
$lang_module['plugin_status_error'] = 'Không tương thích';
$lang_module['plugin_integrate'] = 'Tích hợp';
$lang_module['plugin_integrated'] = 'Các plugin đã tích hợp';
$lang_module['plugin_available'] = 'Các plugin khả dụng khác';
$lang_module['plugin_note'] = 'Nếu có nhiều plugin cùng hook, hãy xem theo từng hook cụ thể để có thể thay đổi độ ưu tiên của mỗi plugin';
$lang_module['plugin_type'] = 'Loại';
$lang_module['plugin_type_sys'] = 'Hệ thống';
$lang_module['plugin_type_module'] = 'Module';
$lang_module['plugin_error_exists_module'] = 'Lỗi: Module %s không tồn tại';
$lang_module['plugin_error_no_hook'] = 'Plugin này lấy dữ liệu từ module %s. Bạn cần cài trước module %s hoặc module ảo của nó';
$lang_module['plugin_error_no_receive'] = 'Plugin này xử lý dữ liệu cho module %s. Bạn cần cài trước module %s hoặc module ảo của nó';
$lang_module['plugin_error_exists'] = 'Plugin cho các module này đã tồn tại. Mời bạn chọn module khác';
$lang_module['plugin_choose_hook_module'] = 'Chọn module nguồn';
$lang_module['plugin_choose_receive_module'] = 'Chọn module đích';

$lang_module['notification_config'] = 'Cấu hình chức năng thông báo';
$lang_module['notification_active'] = 'Hiển thị thông báo khi có hoạt động mới';
$lang_module['notification_autodel'] = 'Tự động xóa thông báo sau thời gian';
$lang_module['notification_autodel_note'] = 'Điền <strong>0</strong> nếu không muốn tự động xóa';
$lang_module['notification_day'] = 'ngày';

$lang_module['is_login_blocker'] = 'Kích hoạt chức năng chặn đăng nhập sai nhiều lần';
$lang_module['login_number_tracking'] = 'Số lần đăng nhập sai tối đa trong khoảng thời gian theo dõi';
$lang_module['login_time_tracking'] = 'Thời gian theo dõi';
$lang_module['login_time_ban'] = 'Thời gian bị cấm đăng nhập';

$lang_module['two_step_verification'] = 'Yêu cầu xác thực đăng nhập hai bước';
$lang_module['two_step_verification0'] = 'Không yêu cầu';
$lang_module['two_step_verification1'] = 'Tại khu vực quản trị';
$lang_module['two_step_verification2'] = 'Tại khu vực ngoài site';
$lang_module['two_step_verification3'] = 'Ở tất cả các khu vực';
$lang_module['two_step_verification_note'] = 'Chú ý: Cấu hình này áp dụng cho toàn bộ tài khoản của các nhóm, nếu cần cấu hình riêng cho từng nhóm hãy chọn giá trị này là <strong>%s</strong> sau đó sửa <a href="%s">nhóm</a> rồi chọn khu vực bắt buộc kích hoạt xác thực hai bước theo ý muốn';
$lang_module['admin_2step_opt'] = 'Các phương thức xác nhận hai bước được phép trong quản trị';
$lang_module['admin_2step_default'] = 'Phương thức xác nhận hai bước mặc định trong quản trị';
$lang_module['admin_2step_appconfig'] = 'Thiết lập ứng dụng tại đây';

$lang_module['site_phone'] = 'Số điện thoại của site';

$lang_module['noflood_ip_add'] = 'Thêm IP bỏ qua kiểm tra flood';
$lang_module['noflood_ip_edit'] = 'Sửa IP bỏ qua kiểm tra flood';
$lang_module['noflood_ip_list'] = 'Các IP bỏ qua kiểm tra flood';

$lang_module['cors'] = 'Thiết lập Cross-Site';
$lang_module['cors_exceptions'] = 'Không áp dụng chặn đối với các trường hợp sau';
$lang_module['cors_site_restrict'] = 'Bảo vệ ngoài site';
$lang_module['cors_site_restrict_help'] = 'Kích hoạt chức năng này để chặn toàn bộ truy vấn từ bên ngoài vào khu vực tương tác với người dùng';
$lang_module['cors_site_valid_domains'] = 'Truy vấn POST từ các tên miền được phép';
$lang_module['cors_site_valid_ips'] = 'Truy vấn POST từ các IP được phép';
$lang_module['cors_site_allowed_variables'] = 'Truy vấn POST có chứa các biến được phép';
$lang_module['cors_site_allowed_variables_note'] = '<ul class="list-unstyled"><li>- Hãy nhập giá trị ở định dạng chuỗi truy vấn URL (ví dụ: <code>key1=value1</code>, <code>key1=value1&key2=value2</code>, <code>key1=value1&key2</code>...). Nhập mỗi giá trị một dòng.</li><li> - Chỉ chấp nhận tên biến (<code>key1</code>, <code>key2</code>...) có chứa các ký tự [a-zA-Z0-9] và dấu gạch dưới.</li><li>- Chỉ chấp nhận giá trị biến (<code>value1</code>, <code>value2</code>...) rỗng hoặc chứa các ký tự [a-zA-Z0-9], dấu gạch ngang, gạch dưới, dấu chấm hoặc @. Giá trị biến rỗng sẽ được hiểu là bất kỳ giá trị nào.</li></ul>';
$lang_module['cors_admin_restrict'] = 'Bảo vệ khu vực quản trị';
$lang_module['cors_admin_restrict_help'] = 'Kích hoạt chức năng này để chặn toàn bộ truy vấn từ bên ngoài vào khu vực quản trị';
$lang_module['cors_admin_valid_domains'] = 'Truy vấn POST từ các tên miền được phép';
$lang_module['cors_admin_valid_ips'] = 'Truy vấn POST từ các IP được phép';
$lang_module['cors_valid_domains_help'] = 'Nhập mỗi tên miền một dòng (vui lòng nhập đầy đủ dạng http://yourdomain.com). Truy vấn từ các tên miền này được phép thực hiện';
$lang_module['cors_valid_ips_help'] = 'Nhập mỗi IP một dòng, truy vấn từ các IP này được phép thực hiện';
$lang_module['allow_null_origin'] = 'Cho phép truy vấn POST với Origin NULL';
$lang_module['ip_allow_null_origin'] = 'IP được truy vấn POST với Origin NULL';
$lang_module['ip_allow_null_origin_help'] = 'Nhập mỗi IP một dòng. Nếu để trống thì tất cả các IP đều được phép';
$lang_module['cookie_notice_popup'] = 'Bật cửa sổ thông báo sử dụng cookie khi người dùng truy cập website lần đầu';
$lang_module['smime_certificate'] = 'Chứng chỉ chữ ký email S/MIME';
$lang_module['smime_cn'] = 'Tên chung của chứng chỉ';
$lang_module['smime_issuer_cn'] = 'Tổ chức phát hành chứng chỉ';
$lang_module['smime_subjectAltName'] = 'Chứng nhận';
$lang_module['smime_validFrom'] = 'Chứng chỉ có giá trị từ';
$lang_module['smime_validTo'] = 'Chứng chỉ có giá trị đến';
$lang_module['smime_signatureTypeSN'] = 'Loại chữ ký';
$lang_module['smime_purposes'] = 'Mục đích';
$lang_module['smime_del'] = 'Xóa';
$lang_module['smime_del_confirm'] = 'Bạn thực sự muốn xóa chứng chỉ này?';
$lang_module['smime_add'] = 'Thêm chứng chỉ';
$lang_module['smime_download'] = 'Tải về';
$lang_module['smime_add_button'] = 'Thực hiện';
$lang_module['smime_pkcs12'] = 'File chứng chỉ (.pfx /.p12)';
$lang_module['smime_passphrase'] = 'Mật khẩu mở khóa tệp chứng chỉ';
$lang_module['smime_download_passphrase'] = 'Tạo mới mật khẩu mở khóa tệp chứng chỉ';
$lang_module['smime_pkcs12_ext_error'] = 'File chứng chỉ phải có phần mở rộng là pfx hoặc p12';
$lang_module['smime_pkcs12_cannot_be_read'] = 'Lỗi: Không thể đọc chứng chỉ';
$lang_module['smime_pkcs12_smimesign_error'] = 'Lỗi: Chứng chỉ không hỗ trợ chữ ký email S/MIME';
$lang_module['smime_pkcs12_overwrite'] = 'Chứng chỉ đã có trên máy chủ. Bạn muốn ghi đè lên bằng file chứng chỉ mới này?';
$lang_module['smime_note'] = 'Chữ ký số S/MIME sẽ được gửi cùng với thư nếu email của người gửi có tệp chứng chỉ được lưu trữ trên máy chủ.';
$lang_module['DKIM_signature'] = 'Chữ ký số của miền gửi thư DKIM';
$lang_module['DKIM_note'] = 'Chữ ký số DKIM sẽ được gửi cùng với thư nếu nó được xác nhận và lưu trữ trên máy chủ.';
$lang_module['DKIM_verified'] = 'DKIM đã được xác nhận';
$lang_module['DKIM_unverified'] = 'DKIM chưa được xác nhận';
$lang_module['DKIM_TXT_host'] = 'Tên của bản ghi TXT';
$lang_module['DKIM_TXT_value'] = 'Giá trị của bản ghi TXT';
$lang_module['dkim_verify'] = 'Xác nhận';
$lang_module['dkim_reverify'] = 'Xác nhận lại';
$lang_module['dkim_del'] = 'Xóa';
$lang_module['dkim_del_confirm'] = 'Bạn thực sự muốn xóa chữ ký số này?';
$lang_module['DKIM_verify_note'] = 'Để xác nhận chữ ký số DKIM, hãy truy cập vào trang quản lý DNS của tên miền, thêm bản ghi TXT với các thông số trên, sau đó click vào nút Xác nhận (Bạn có thể phải chờ để bản ghi mới cập nhật).';
$lang_module['DKIM_add'] = 'Thêm chữ ký số DKIM';
$lang_module['DKIM_add_button'] = 'Thực hiện';
$lang_module['DKIM_domain'] = 'Miền gửi thư';
$lang_module['DKIM_domain_error'] = 'Lỗi: Miền gửi thư không đúng định dạng';
$lang_module['DKIM_domain_exists'] = 'Miền gửi thư này đã có trên máy chủ';
$lang_module['DKIM_created'] = 'Chữ ký số DKIM cho miền gửi thư %s đã được tạo. Bạn cần tiến hành xác nhận chữ ký số DKIM này theo hướng dẫn ở trang tiếp theo.';
$lang_module['dkim_included'] = 'Gửi kèm chữ ký số DKIM (nếu có) khi dùng phương thức';
$lang_module['smime_included'] = 'Gửi kèm chứng chỉ S/MIME (nếu có) khi dùng phương thức';

$lang_module['csp'] = 'Thiết lập CSP';
$lang_module['csp_desc'] = 'Content-Security-Policy (CSP) là tên của tiêu đề phản hồi HTTP (HTTP response header) mà các trình duyệt hiện đại sử dụng để nâng cao tính bảo mật trang web. CSP cho phép bạn hạn chế việc sử dụng các tài nguyên như JavaScript, CSS hoặc bất kỳ thứ gì mà trình duyệt tải.';
$lang_module['csp_details'] = 'Thông tin chi tiết';
$lang_module['csp_default-src'] = 'Chỉ thị <code>default-src</code> chỉ định chính sách bảo mật cho các loại nội dung không được xác định cụ thể bởi các chỉ thị riêng của chúng.';
$lang_module['csp_script-src'] = 'Chỉ thị <code>script-src</code> chỉ định các nguồn hợp lệ cho JavaScript. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định. Khi có <code>script-src</code> hoặc <code>default-src</code>, việc sử dụng tập lệnh nội tuyến và <code>eval()</code> bị chặn trừ khi bạn chỉ định <code>\'unsafe-inline\'</code> và <code>\'unsafe-eval\'</code>.';
$lang_module['csp_object-src'] = 'Chỉ thị <code>object-src</code> chỉ định các nguồn hợp lệ cho các phần tử <code>&lt;object&gt;</code>, <code>&lt;embed&gt;</code> và <code>&lt;applet&gt;</code>. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định.';
$lang_module['csp_style-src'] = 'Chỉ thị <code>style-src</code> chỉ định các nguồn hợp lệ cho các stylesheets. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định. Khi có <code>style-src</code> hoặc <code>default-src</code>, việc sử dụng các phần tử <code>&lt;style&gt;</code> nội tuyến và thuộc tính HTML <code>style=&quot;...&quot;</code> bị tắt trừ khi bạn chỉ định <code>\'unsafe-inline\'</code>.';
$lang_module['csp_img-src'] = 'Chỉ thị <code>img-src</code> chỉ định các nguồn hợp lệ cho hình ảnh và biểu tượng favicon. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định.';
$lang_module['csp_media-src'] = 'Chỉ thị <code>media-src</code> chỉ định các nguồn hợp lệ cho các phần tử <code>&lt;audio&gt;</code> và <code>&lt;video&gt;</code>. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định.';
$lang_module['csp_frame-src'] = 'Chỉ thị <code>frame-src</code> chỉ định các nguồn hợp lệ cho các phần tử như <code>&lt;frame&gt;</code> và <code>&lt;iframe&gt;</code>. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định.';
$lang_module['csp_font-src'] = 'Chỉ thị <code>font-src</code> chỉ định các nguồn hợp lệ cho các phông chữ được tải bằng <code>@font-face</code>. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định.';
$lang_module['csp_connect-src'] = 'Chỉ thị <code>connect-src</code> chỉ định các nguồn hợp lệ cho các kết nối <code>fetch</code>, <code>XMLHttpRequest</code>, <code>WebSocket</code> và <code>EventSource</code>. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định.';
$lang_module['csp_form-action'] = 'Chỉ thị <code>form-action</code> chỉ định các địa chỉ có thể được sử dụng để gửi <code>&lt;form&gt;</code>.';
$lang_module['csp_base-uri'] = 'Chỉ thị <code>base-uri</code> chỉ định các URL có thể được sử dụng trong phần tử <code>&lt;base&gt;</code> của tài liệu.';
$lang_module['csp_frame-ancestors'] = 'Chỉ thị <code>frame-ancestors</code> chỉ định nguồn cha được phép nhúng trang hiện tại vào nội dung của nó bằng cách sử dụng các phần tử như <code>&lt;frame&gt;</code>, <code>&lt;iframe&gt;</code>, <code>&lt;object&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;applet&gt;</code>. Nó thay thế cho header <code>X-Frame-Options</code>.';
$lang_module['csp_manifest-src'] = 'Chỉ thị <code>manifest-src</code> chỉ định manifest nào có thể được áp dụng cho tài nguyên. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định.';
$lang_module['csp_prefetch-src'] = 'Chỉ thị <code>prefetch-src</code> hạn chế các URL mà tài nguyên có thể được tìm nạp trước hoặc hiển thị trước. Chỉ thị này sẽ trở lại <code>default-src</code> nếu không được chỉ định.';
$lang_module['csp_act'] = 'Kích hoạt CSP';
$lang_module['csp_script_nonce'] = 'Kích hoạt thuộc tính nonce cho script';
$lang_module['csp_script_nonce_note'] = 'Hệ thống sẽ tự động thêm vào thuộc tính nonce cho các phần tử &lt;script&gt; được liệt kê trong các file TPL. Nếu kích hoạt, chỉ các tài nguyên có mã nonce này mới được thực thi; các thuộc tính HTML xử lý sự kiện nội tuyến như onclick, onload... sẽ bị vô hiệu; các tài nguyên như self, unsafe-inline và danh sách các hosts sẽ bị bỏ qua.';
$lang_module['csp_source_none'] = 'None - Chặn việc sử dụng loại tài nguyên này.';
$lang_module['csp_source_all'] = 'All - Cho phép tất cả loại tài nguyên này.';
$lang_module['csp_source_self'] = 'Self - Cho phép tài nguyên từ tên miền gốc hiện tại chứ không phải từ tên miền phụ.';
$lang_module['csp_source_data'] = 'Data - Cho phép &quot;data: URI&quot; được sử dụng làm nguồn nội dung.';
$lang_module['csp_source_default-src_unsafe-inline'] = 'Unsafe Inline - Cho phép sử dụng các tài nguyên nội tuyến như phần tử &lt;script&gt; và &lt;style&gt;.';
$lang_module['csp_source_script-src_unsafe-inline'] = 'Unsafe Inline - Cho phép sử dụng các tài nguyên nội tuyến, chẳng hạn như các phần tử &lt;script&gt; nội tuyến, &quot;javascript: URLs&quot; và trình xử lý sự kiện nội tuyến (ví dụ: onclick, onsubmit...).';
$lang_module['csp_source_style-src_unsafe-inline'] = 'Unsafe Inline - Cho phép sử dụng các tài nguyên nội tuyến như phần tử &lt;style&gt; và thuộc tính style.';
$lang_module['csp_source_unsafe-eval'] = 'Unsafe Eval - Cho phép sử dụng eval () và các phương thức tương tự để tạo mã từ chuỗi.';
$lang_module['csp_source_hosts'] = 'Danh sách các máy chủ nguồn được chấp nhận (mỗi giá trị một dòng)';
$lang_module['csp_source_none_confirm'] = 'Nếu tùy chọn này được bật, các tài nguyên khác của chỉ thị hiện tại sẽ bị vô hiệu hóa. Bạn đồng ý?';
$lang_module['csp_source_hosts_note'] = 'Biểu thức máy chủ hợp lệ có thể bao gồm: http://*.example.com, mail.example.com:443, https://store.example.com, *.example.com, https://example.com:*';

$lang_module['rp'] = 'Thiết lập RP';
$lang_module['rp_desc'] = 'Referrer-Policy (RP) là tên của tiêu đề HTTP (HTTP response header) mà các trình duyệt hiện đại sử dụng để kiểm soát lượng thông tin liên kết nguồn (được gửi qua header &quot;Referer&quot; đến trang đích).';
$lang_module['rp_desc2'] = 'Các thông tin liên kết nguồn có thể được gửi:<ul><li>Origin: bao gồm scheme (ví dụ: http, https), host (ví dụ: nukeviet.vn) và port (ví dụ: 80, 443)</li><li>Path (đường dẫn tuyệt đối trên máy phục vụ, ví dụ: thumuc1/index.php)</li><li>Querystring (chuỗi truy vấn, ví dụ: ?name=ferret&color=purple)</li></ul>';
$lang_module['rp_details'] = 'Thông tin chi tiết';
$lang_module['rp_act'] = 'Kích hoạt RP';
$lang_module['rp_no_referrer'] = 'Header &quot;Referer&quot; sẽ bị bỏ qua hoàn toàn. Không có thông tin về liên kết nguồn được gửi cùng với các yêu cầu.<br/>Chú ý: NukeViet không hỗ trợ chỉ thị này!';
$lang_module['rp_no_referrer_when_downgrade'] = 'Gửi origin, path và querystring của liên kết nguồn trong header &quot;Referer&quot; khi giao thức của trang đích giống hoặc bảo mật hơn trang nguồn (HTTP→HTTP, HTTP→HTTPS, HTTPS→HTTPS). Không gửi header &quot;Referer&quot; cho các yêu cầu đến các trang đích kém an toàn hơn (HTTPS→HTTP, HTTPS→file).';
$lang_module['rp_origin'] = 'Chỉ gửi origin của liên kết nguồn trong header &quot;Referer&quot;. Ví dụ: với liên kết nguồn là https://example.com/page.html sẽ gửi header &quot;Referer&quot; là https://example.com/.';
$lang_module['rp_origin_when_cross_origin'] = 'Gửi origin, path và querystring khi trang đích có cùng origin. Chỉ gửi origin đối với các trường hợp khác.';
$lang_module['rp_same_origin'] = 'Gửi origin, path và querystring khi trang đích có cùng origin. Không gửi header &quot;Referer&quot; đối với các trường hợp khác.';
$lang_module['rp_strict_origin'] = 'Chỉ gửi origin khi giao thức của trang đích giống trang nguồn (HTTPS→HTTPS). Không gửi header &quot;Referer&quot; đến các đích kém an toàn hơn (HTTPS→HTTP).';
$lang_module['rp_strict_origin_when_cross_origin'] = 'Gửi origin, path và querystring khi trang đích có cùng origin. Chỉ gửi origin khi trang đích không cùng origin nhưng cùng giao thức (HTTPS→HTTPS). Không gửi header &quot;Referer&quot; đến các đích không cùng origin và giao thức kém an toàn hơn (HTTPS→HTTP). Đây là chính sách mặc định nếu không có chính sách nào được chỉ định hoặc nếu giá trị đã cung cấp không hợp lệ.';
$lang_module['rp_unsafe_url'] = 'Gửi origin, path và querystring trong mọi trường hợp. Cảnh báo: Chính sách này sẽ làm rò rỉ thông tin có khả năng riêng tư từ các URL dạng HTTPS đến các nguồn không an toàn. Hãy xem xét cẩn thận tác động của cài đặt này.';
$lang_module['rp_note'] = 'Để đề phòng trường hợp trình duyệt không hỗ trợ chỉ thị mong muốn, bạn có thể liệt kê nhiều chỉ thị được phân cách bằng dấu phẩy với trật tự: chỉ thị mong muốn được chỉ định sau cùng. Ví dụ: Referrer-Policy: no-referrer-when-downgrade, strict-origin-when-cross-origin. Ở ví dụ trên, chính sách no-referrer-when-downgrade sẽ được áp dụng nếu trình duyệt không hỗ trợ strict-origin-when-cross-origin.';
$lang_module['rp_directives'] = 'Các chỉ thị RP';
$lang_module['end_url_variables'] = 'Các biến được phép chèn vào cuối URL';
$lang_module['end_url_variables_note'] = 'Cấu hình này không bị phụ thuộc vào cấu hình «Kiểm tra URL trong khu vực tương tác với người dùng» ở trên';
$lang_module['end_url_variable_name'] = 'Tên biến';
$lang_module['end_url_variable_dataformat'] = 'Định dạng dữ liệu';
$lang_module['end_url_variable_name_note'] = 'Chỉ chấp nhận: [a-zA-Z0-9] và gạch dưới';
$lang_module['lowercase_letters'] = 'Chữ viết thường [a-z]';
$lang_module['uppercase_letters'] = 'Chữ viết hoa [A-Z]';
$lang_module['number'] = 'Số [0-9]';
$lang_module['dash'] = 'Gạch ngang';
$lang_module['underline'] = 'Gạch dưới';
$lang_module['dot'] = 'Dấu chấm';
$lang_module['at_sign'] = '@';
$lang_module['request_uri_check'] = 'Kiểm tra URL trong khu vực tương tác với người dùng';
$lang_module['request_uri_check_page'] = 'Theo cấu hình của từng trang';
$lang_module['request_uri_check_not'] = 'Không kiểm tra';
$lang_module['request_uri_check_path'] = 'Chỉ kiểm tra phần path của URL';
$lang_module['request_uri_check_query'] = 'Kiểm tra các phần path và query của URL';
$lang_module['request_uri_check_abs'] = 'Kiểm tra URL với độ chính xác tuyệt đối';
$lang_module['resource_preload'] = 'Áp dụng tải trước tài nguyên';
$lang_module['resource_preload_not'] = 'Không áp dụng';
$lang_module['resource_preload_headers'] = 'Thông qua tiêu đề phản hồi HTTP';
$lang_module['resource_preload_html'] = 'Thông qua thẻ HTML &lt;link&gt;';
$lang_module['XSSsanitize'] = 'Lọc các mã HTML nguy hiểm trước khi gửi biểu mẫu trong khu vực tương tác với người dùng';
$lang_module['admin_XSSsanitize'] = 'Lọc các mã HTML nguy hiểm trước khi gửi biểu mẫu trong khu vực quản trị';
