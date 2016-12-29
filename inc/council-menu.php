
<div class="sidebar council_sidebar">
    <ul>
        <li class="haveSons">
            <a href="#"><?php _e('About Council', 'kasrin'); ?><button type="button" class="openSideMenuSons"></button></a>
            <?php wp_nav_menu( array( 'theme_location' => 'council_first_menu', 'container' => '', 'menu_class' => 'council_first_menu' ) ); ?> 
        </li>
        <li class="haveSons">
            <a href="#"><?php _e('Freedom of Information', 'kasrin'); ?><button type="button" class="openSideMenuSons"></button></a>
            <?php wp_nav_menu( array( 'theme_location' => 'council_sec_menu', 'container' => '', 'menu_class' => 'council_sec_menu' ) ); ?> 
        </li>
        <li class="haveSons">
            <a href="#"><?php _e('Departments', 'kasrin'); ?> <button type="button" class="openSideMenuSons"></button></a>
            <?php wp_nav_menu( array( 'theme_location' => 'council_third_menu', 'container' => '', 'menu_class' => 'council_third_menu' ) ); ?> 
        </li>
    </ul>
    <div class="clear"></div>
</div>