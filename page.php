<?php 
// for single page

while(have_posts()){
    the_post() ; ?>
        I am a page
        <h2><?php the_title() ?></h2>

        <p><?php the_content() ?></p>
    <?php 
}
?>