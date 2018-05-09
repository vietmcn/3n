<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
 function namecards() {
    global $post;
    ?>
        <div class="n-namecard">
            <header id="namecard-cover">
            <figure>
                <img src="https://i.imgur.com/SlFbGp1.png" />
            </figure>
            </header>
            <section>
                <div class="">
                    <p class="desc"></p>
                    <p class="phone">092x<span><i class="3nicon-mobile"></i>Mobile</span></p>
                    <p class="phone">092x<span>Telephone</span></p>
                    <p class="phone">092x<span>Fax</span></p>
                    <p class="phone">092x<span><i class="3nicon-email"></i>Email</span></p>
                    <p class="phone">092x<span><i class="3nicon-cty"></i>Giám Đốc</span></p>
                    <p class="phone">092x<span><i class="3nicon-web"></i>Website</span></p>
                </div>
                <div class="social">
                    <p class="social-title">Social Media</p>
                    <ul>
                        <li><a href="" title="Facebook của tôi"><i class="3nicon-facebook"></i></a></li>
                        <li><a href="" title="Zalo của tôi"><i class="3nicon-zaolo"></i></a></li>
                        <li><a href="" title="Viber của tôi"><i class="3nicon-viber"></i></a></li>
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
