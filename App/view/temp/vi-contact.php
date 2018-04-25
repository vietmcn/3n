<?php
function n_View_contact() {
    if ( is_page('lien-he') ) {
        ?>
            <div id="n_View_banner_header_contact"></div>
            <div id="n_View_Conact">
                <div class="n_View_container">
                    <?php echo do_shortcode('[contact-form-7 id="13" title="Form liên hệ 1"]');?>
                </div>
            </div>
        <?php
    }
}