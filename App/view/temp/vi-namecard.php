<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
 function namecards() {
    global $post;
    $meta = new n_GetmetaBox;
    ?>
        <div class="n-namecard">
            <header id="namecard-cover" class="flex">
            <figure>
                <img src="https://i.imgur.com/SlFbGp1.png" />
            </figure>
            <div class="phone-email flex">
                <a href="tel:<?php $meta->get( $post->ID, '_meta_card', 'phone' );?>"><i class="3nicon-phone"></i></a>
                <a href="mailto:<?php $meta->get( $post->ID, '_meta_card', 'email' ); ?>"><i class="3nicon-email"></i></a>
            </div>
            </header>
            <section class="sec-namecard">
                <div class="">
                    <p class="desc"><?php $meta->get( $post->ID, '_meta_card', 'desc' ); ?></p>
                    <p class="phone"><?php $meta->get( $post->ID, '_meta_card', 'phone' ); ?><span><i class="3nicon-mobile"></i>Mobile</span></p>
                    <p class="phone"><?php $meta->get( $post->ID, '_meta_card', 'homephone' ); ?><span>Telephone</span></p>
                    <p class="phone"><?php $meta->get( $post->ID, '_meta_card', 'fax' ); ?><span>Fax</span></p>
                    <p class="phone"><?php $meta->get( $post->ID, '_meta_card', 'email' ); ?><span><i class="3nicon-email"></i>Email</span></p>
                    <p class="phone"><?php $meta->get( $post->ID, '_meta_card', 'chuvu' ); ?><span><i class="3nicon-cty"></i>Giám Đốc</span></p>
                    <p class="phone"><?php $meta->get( $post->ID, '_meta_card', 'web' ); ?><span><i class="3nicon-web"></i>Website</span></p>
                </div>
                <div class="social">
                    <p class="social-title">Social Media</p>
                    <ul>
                        <li><a href="<?php $meta->get( $post->ID, '_meta_card', 'facebook' ); ?>" title="Facebook của tôi"><i class="3nicon-facebook"></i></a></li>
                        <li><a href="<?php $meta->get( $post->ID, '_meta_card', 'zalo' ); ?>" title="Zalo của tôi"><i class="3nicon-zaolo"></i></a></li>
                        <li><a href="<?php $meta->get( $post->ID, '_meta_card', 'viber' ); ?>" title="Viber của tôi"><i class="3nicon-viber"></i></a></li>
                    </ul>
                </div>
                <div class="download-name-card"><i class="3nicon-download"></i> Download Vcard</div>
                <div class="share-name-card"><i class="3nicon-share"></i> Share this page</div>
            </section>
            <footer>
            </footer>
        </div>
    <?php 
}

add_action( 'wp_enqueue_scripts', function() {
    if ( is_singular( 'namecard' ) ) {
        wp_enqueue_style( 'name-card', get_template_directory_uri().'/App/assets/css/namecard.min.css', '', 'all' );
    }
} );