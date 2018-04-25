<?php
function n_View_page() {
    if ( is_page('lien-he') ) {
        ?>
        <!--
            <label>[text name id:n_from_name class:from_name placeholder akismet:author "Tên"]</label>
<label>[email Email id:n_form_email class:n_form_email placeholder "Email"]</label>
<label>[tel tel placeholder "Số điện thoại"]</label>
<label>[textarea content placeholder "Nội Dung"]</label>
[submit "Gữi"]
    -->
            <div id="n_View_banner_header_contact"></div>
            <div id="n_View_Conact">
                <div class="n_View_container flex">
                    <div class="info-contact">
                        <ul>
                            <li>Office opening : 9h30 AM – 18h30 PM from Monday to Friday</li>
                            <li class="icon"><i class="ion-minus-round"></i></li>
                            <li>P: 0909 18 77 28</li>
                            <li>E: info@3abrand.com</li>
                            <li>Skype: 3abrand.com</li>
                            <li>Office: 14 Phan Ton St., Da Kao Ward , Distrist 1 , HCMC, Vietnam</li>
                        </ul>
                        <p>For works, credentials, please feel free to get in touch, we‘d love to hear from you.</p>
                    </div>
                    <?php 
                        echo do_shortcode('[contact-form-7 id="13" title="Form liên hệ 1"]');
                    ?>
                </div>
            </div>
        <?php
    } elseif (is_page('service')) {
        ?>
            <div id="n_View_banner_header"></div>
            <div id="n_View_service">
                <div class="n_View_container flex">
                    <div class="n_View_banner_social"><img src="<?php echo get_template_directory_uri();?>/App/assets/img/banner-social.png"/></div>
                    <div class="n_View_banner_web"><img src="<?php echo get_template_directory_uri();?>/App/assets/img/banner-web.png"/></div>
                    <div class="n_View_banner_mobile"><img src="<?php echo get_template_directory_uri();?>/App/assets/img/banner-mobile.png"/></div>
                    <div class="n_View_banner_crea"><img src="<?php echo get_template_directory_uri();?>/App/assets/img/banner-creati.png"/></div>
                    <div class="n_View_banner_video"><img src="<?php echo get_template_directory_uri();?>/App/assets/img/banner-video.png"/></div>
                    <div class="n_View_banner_digi"><img src="<?php echo get_template_directory_uri();?>/App/assets/img/banner-digi.png"/></div>
                </div>
            </div>
        <?php
    } elseif (is_page('project')) {
        ?>
            <div id="n_View_banner_header"></div>
            <div id="n_View_project">
                <div class="n_View_container flex">
                    <div class="n_View_banner_project"><img src="<?php echo get_template_directory_uri();?>/App/assets/img/project.png"/></div>
                </div>
            </div>
        <?php
    }
}