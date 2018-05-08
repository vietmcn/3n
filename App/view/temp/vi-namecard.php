<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
 function namecards() {
    global $post;
    ?>
        <div class="n-namecard">
            <header id="namecard-cover">
                <?php echo $post->ID;?>
            </header>
        </div>
    <?php 
}
