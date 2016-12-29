<?php
    if(get_query_var("member_post")){
        $member_post = get_query_var("member_post");
    }else{
        $member_post = $post;
    }
    $facebook_link = get_field("facebook_page_link",$member_post->ID);
    $google_link = get_field("google_plus_link",$member_post->ID);
    $twitter_link = get_field("twitter_link",$member_post->ID);
?>
<div class="social-sites">
    <?php if($google_link):?>
        <a href="<?php echo $google_link;?>" class="lnk no_mar">
            <img class="icon" src="<?php echo get_template_directory_uri();?>/images/google-icon2.png" width="24" height="24" alt="">
        </a>
    <?php endif;?>
    <?php if($twitter_link):?>
        <a href="<?php echo $twitter_link;?>" class="lnk">
            <img class="icon" src="<?php echo get_template_directory_uri();?>/images/twitter-icon2.png" width="24" height="24" alt="">
        </a>
    <?php endif;?>
    <?php if($facebook_link):?>
        <a href="<?php echo $facebook_link;?>" class="lnk">
            <img class="icon" src="<?php echo get_template_directory_uri();?>/images/facebook-icon2.png" width="24" height="24" alt="">
        </a>
    <?php endif; ?>
    <div class="clear"></div>
</div>
