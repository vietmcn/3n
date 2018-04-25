<?php 
/** 
 * Set View 
 */
if ( !defined( 'ABSPATH' ) ) :
    exit;
endif;
/**
 * Import View Class
 */
require_once ( N_EXTEND_FOLDER .'/App/view/class/vi-class-front.php' );

function n_View_header() {
    global $n_View_template;
    //Call Logo
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    $n_View_template->logo( array(
        'title' => get_bloginfo('name'),
        'link' => ( isset( $image[0] ) ) ? $image[0] : get_template_directory_uri().'/App/assets/img/Logo-150x150.png',
    ) );
    $n_View_template->menu( array(
        'slug' => 'menu_header',
        'echo' => 'true',
        'styleCss' => 'n-View-menu-header',
    ) );
}
function n_View_index() {
    $out = '';
    if ( is_home() || is_front_page() ) {
        $out  .= '<div id="n_View_banner_header"></div>';
    }
    $out .= '<div id="n_View_banner_about">';
    $out .= '<div class="n_View_container n_View_about flex">';
    $out .= '<span class="n_View_Icon_About"></span>';
    $out .= '<h2>Giới Thiệu Về Chúng Tôi</h2>';
    $out .= '<h4>Tạo sự khác biệt cho thương hiệu của bạn</h4>';
    $out .= '<p>3A Agency là một cơ quan kỹ thuật số và sáng tạo đầy đủ dịch vụ có trụ sở tại thành phố Hồ Chí Minh, Việt Nam. 
    Chúng tôi là một nhóm các chuyên gia trẻ tuổi có chuyên môn về thiết kế đáp ứng và các nền tảng sáng tạo, 
    chuyên cung cấp các giải pháp kỹ thuật số hiệu quả, có thể đo lường và sáng tạo cho khách hàng của chúng tôi.</p>';
    $out .= '<div>';
    $out .= '<a href="/contact" title="Liên Hệ">Chi Tiết</a>';
    $out .= '<a href="/">Liên Hệ</a>';
    $out .= '</div>';
    $out .= '</div>';
    $out .= '</div>';
    echo $out;
}
// Service 
function n_View_service() {
    $out  = '<div id="n_View_banner_service">';
    $out .= '<div class="n_View_container n_View_service flex">';
    $out .= '<div class="n_View_service_icon"></div>';
    $out .= '<ul class="grid">';
    $out .= '<h2>Dịch vụ <br/> chúng tôi</h2>';
    $out .= '<li class="inline-felx">';
    $out .= '<h4>CONCEPT DEVELOPMENT</h4>';
    $out .= '<p>Giản đơn tạo nên xuất sắc. Khi thực hiện những tác phẩm mang vị thế tầm vóc của công ty như Print-Ad, Brochure, Profile, Annual Report, chắc chắn bạn sẽ muốn có một ý tưởng tốt để chuyển tải và thúc đẩy hiệu quả công việc nhanh nhất.</p>';
    $out .= '<a href="#">Xem Chi Tiết</a>';
    $out .= '</li>';
    $out .= '<li class="inline-felx">';
    $out .= '<h4>PACKAGING DESIGN</h4>';
    $out .= '<p>Hãy khiến khách hàng dừng lại và chú ý tới sản phẩm của bạn. Thông điệp được truyền đi chỉ một cái nhìn thoáng qua, xác định bạn là ai. Lebrand sáng tạo nên những thiết kế bao bì độc đáo và tạo nên sự khác biệt cho sản phẩm</p>';
    $out .= '<a href="#">Xem Chi Tiết</a>';
    $out .= '</li>';
    $out .= '<li class="inline-felx">';
    $out .= '<h4>BRAND GUIDELINES</h4>';
    $out .= '<p>Hướng dẫn thương hiệu của một tổ chức cần phải có một sự hiểu biết đầy đủ về những thương hiệu tượng trưng. Mục tiêu của chúng tôi là phát triển một hệ thống hướng dẫn mở rộng thương hiệu mà có kết cấu và độ sâu.</p>';
    $out .= '<a href="#">Xem Chi Tiết</a>';
    $out .= '</li>';
    $out .= '<li class="inline-felx">';
    $out .= '<h4>WEB DESIGN</h4>';
    $out .= '<p>Bạn đang muốn tạo một trang web đầy đủ các tính năng, giao diện thân thiện, bắt mắt, tích hợp mạng xã hội và nhiều hơn thế nữa. Chúng tôi có những ý tưởng sáng tạo kết hợp với kinh nghiệm nhiều năm để giúp bạn xây dựng một thương hiệu bền vững.</p>';
    $out .= '<a href="#">Xem Chi Tiết</a>';
    $out .= '</li>';
    $out .= '<li class="inline-felx">';
    $out .= '<h4>BRANDING</h4>';
    $out .= '<p>Thương hiệu diễn đạt định vị độc nhất của bạn. Vui vẻ? Tin cậy? Vượt xa đối thủ? Hãy để logo, bảng màu, tất cả những gì thuộc về thương hiệu của bạn phản ánh điều đó. Không gây rối trí khách hàng và thương hiệu của bạn sẽ được ghi khắc trong tâm tưởng họ.</p>';
    $out .= '<a href="#">Xem Chi Tiết</a>';
    $out .= '</li>';
    $out .= '<li class="inline-felx">';
    $out .= '<h4>MARKETING ONLINE</h4>';
    $out .= '<p>Gói dịch vụ này sẽ giúp quý Doanh nghiệp tiếp cận nhanh chóng và xây dựng cộng đồng khách hàng trên internet bằng những công cụ Marketing trực tuyến. Hãy để các chuyên gia của chúng tôi hướng dẫn lựa chọn đường lối marketing online đúng đắn cho bạn.</p>';
    $out .= '<a href="#">Xem Chi Tiết</a>';
    $out .= '</li>';
    $out .= '<li class="inline-felx">';
    $out .= '<h4>PRODUCTION</h4>';
    $out .= '<p>Đón nhận những sản phẩm in ấn và sản xuất mỹ thuật luôn là điều hồi hộp thú vị. Nhưng để có được sự trầm trồ kinh ngạc cho những điều tuyệt mỹ, bạn cần được phục vụ bởi một đội ngũ kỹ thuật viên kinh nghiệm, chuyên nghiệp.</p>';
    $out .= '<a href="#">Xem Chi Tiết</a>';
    $out .= '</li>';
    $out .= '<li class="inline-felx">';
    $out .= '<h4>VIDEO PRODUCTION</h4>';
    $out .= '<p>Chúng tôi có đầy đủ các dịch vụ để sản xuất một bộ phim, từ ý tưởng, viết kịch bản, ghi hình và hậu kỳ hoàn thiện sản phẩm . Chúng tôi sẽ làm cho doanh nghiệp nổi bật bằng cách sử dụng các thiết bị sản xuất tốt nhất, kỹ thuật hậu kỳ mới nhất.</p>';
    $out .= '<a href="#">Xem Chi Tiết</a>';
    $out .= '</li>';
    $out .= '<a href="#">Yêu Cầu Dịch Vụ</a>';
    $out .= '</ul>';
    $out .= '</div>';
    $out .= '</div>';
    echo $out;
}
//Template Client 
add_action( '3n_index', function() {
    $out  = '<div id="n_View_banner_client">';
    $out .= '<div class="n_View_container">';
    $out .= '<h3 class="flex">Khách hàng <br/> chúng tôi</h2>';
    $out .= '<ul>';
    $out .= '<li><a href="#"><span class="client_1"></span></a></li>';
    $out .= '<li><a href="#"><span class="client_2"></span></a></li>';
    $out .= '<li><a href="#"><span class="client_3"></span></a></li>';
    $out .= '<li><a href="#"><span class="client_4"></span></a></li>';
    $out .= '<li><a href="#"><span class="client_5"></span></a></li>';
    $out .= '<li><a href="#"><span class="client_6"></span></a></li>';
    $out .= '<li><a href="#"><span class="client_7"></span></a></li>';
    $out .= '<li><a href="#"><span class="client_8"></span></a></li>';
    $out .= '<li><a href="#"><span class="client_9"></span></a></li>';
    $out .= '</ul>';
    $out .= '</div>';
    $out .= '</div>';
    echo $out;
} );
// Quy Trinh
add_action( '3n_index', function() {
    $out  = '<div id="n_View_banner_qt">';
    $out .= '<div class="n_View_container">';
    $out .= '<h3 class="flex">Quy Trình Của Chúng Tôi</h2>';
    $out .= '<div class="content flex">';
    $out .= '<div class="content_1 content_ flex">';
    $out .= '<i class="icon icontent_1"></i>';
    $out .= '<h5>Tư Vấn & Ý Tưởng</h5>';
    $out .= '<p>Trước tiên, bạn sẽ được chúng tôi tư vấn để đưa ra các giải pháp phù hợp với quy mô, yêu cầu và mong muốn cho doanh nghiệp của bạn, từ đó hình thành lên những ý tưởng.</p>';
    $out .= '</div>';
    $out .= '<div class="content_1 content_ flex">';
    $out .= '<i class="icon icontent_2"></i>';
    $out .= '<h5>Phác Thảo & Hợp Đồng</h5>';
    $out .= '<p>Với giải pháp và ý tưởng mà 2 bên đã thống nhất, 3A Brand sẽ tiến hành phác thảo và thiết kế demo sản phẩm. Sau đó 2 bên sẽ ký hợp đồng để tiến hành hoàn thiện sản phẩm.</p>';
    $out .= '</div>';
    $out .= '<div class="content_1 content_ flex">';
    $out .= '<i class="icon icontent_3"></i>';
    $out .= '<h5>Thiết Kế & Chỉnh Sửa</h5>';
    $out .= '<p>Sản phẩm được thiết kế xong, chúng tôi sẽ cùng khách hàng chỉnh sửa và kiểm tra lại trước khi hoàn thiện và tung ra sản phẩm cuối cùng.</p>';
    $out .= '</div>';
    $out .= '<div class="content_1 content_ flex">';
    $out .= '<i class="icon icontent_4"></i>';
    $out .= '<h5>Hoàn Tất Hợp Đồng</h5>';
    $out .= '<p>Khách hàng tiến hành thủ tục hoàn tất hợp đồng, sản phẩm cuối cùng sẽ được tung ra. Thực hiện các chương trình digital marketing để phát triển sản phẩm (nếu có).</p>';
    $out .= '</div>';
    $out .= '</div>';
    $out .= '</div>';
    $out .= '</div>';
    echo $out;
} );
// Template Footer 
add_action('3n_footer', function() {
    global $n_View_template;
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    $n_View_template->footer( array(
        'logo' => get_template_directory_uri().'/App/assets/img/logo-footer.png',
        'title' => get_bloginfo('Name'),
        'link' => get_bloginfo( 'url' ),
        'socail' => array(
            'facebook' => '//facebook.com',
            'tw' => '//facebook.com',
            'youtube' => '//facebook.com',
            'linkdin' => '',
            'google_plus' => '',
            'instagram' => '',
        ),
    ) );
    echo '<div class="col-2"></div>';
    $n_View_template->contact( array(
        'position' => 'footer',
        'time_work' => array(
            'name' => 'Office Opening',
            'time' => array( 
                'start' => '9h30 AM',
                'off' => '18h30 PM',
                'day' => 'from Monday to Friday',
            ),
        ),
        'phone' => '0909 18 77 28',
        'email' => 'info@3abrand.com',
        'skype' => '3abrand.com',
        'adds' => '14 Phan Ton St, Da Kao Ward, Distrist 1, HCMC, Vietnam',
    ) );
} );