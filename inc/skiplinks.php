<?php
    $skip_to_access_sidebar = get_field('skip_to_accessibility_sidebar','option') ? get_field('skip_to_accessibility_sidebar','option') : __("Skip to Accessibility Sidebar","accessibility");
    $skip_to_navigation = get_field('skip_to_navigation','option') ? get_field('skip_to_navigation','option') : __("Skip to Navigation","accessibility");
    $skip_to_slider = get_field('skip_to_slider','option') ? get_field('skip_to_slider','option') : __("Skip to Slider","accessibility");
    $skip_to_links_page = get_field('skip_to_links_page','option') ? get_field('skip_to_links_page','option') : __("Skipt to Links Page","accessibility");
    $skip_to_mayor_remarks = get_field('skip_to_mayor_remarks','option') ? get_field('skip_to_mayor_remarks','option') : __("Skip to Mayor Remakrs","accessibility");
    $skip_to_events_board = get_field('skip_to_events_board','option') ? get_field('skip_to_events_board','option') : __("Skip to Events Board","accessibility");
    $skip_to_city_events = get_field('skip_to_city_events','option') ? get_field('skip_to_city_events','option') : __("Skip to City events","accessibility");
    $skip_to_partners = get_field('skip_to_partners','option') ? get_field('skip_to_partners','option') : __("Skip to Partners","accessibility");
    $skip_to_footer = get_field('skip_to_footer','option') ? get_field('skip_to_footer','option') : __("Skip to footer","accessibility");
    $skip_to_main_content = get_field('skip_to_main_content','option') ? get_field('skip_to_main_content','option') : __("Skip to main content","accessibility");
?>

<div id="skip">
    <a rel="nofollow" href="#skip-navigation" tabindex="1"><?php echo $skip_to_navigation; ?></a>
    <a rel="nofollow" href="#skip-access-sidebar" class="trigger_access_sidebar" tabindex="2"><?php echo $skip_to_access_sidebar; ?></a>
    <?php if( is_home() || is_front_page() ) : ?>
        <a rel="nofollow" href="#skip-homeslider" tabindex="3"><?php echo $skip_to_slider; ?></a>
        <a rel="nofollow" href="#skip-links-pages" tabindex="4"><?php echo $skip_to_links_page; ?></a>
        <a rel="nofollow" href="#skip-mayor-remarks" tabindex="5"><?php echo $skip_to_mayor_remarks; ?></a>
        <a rel="nofollow" href="#skip-events-board" tabindex="6"><?php echo $skip_to_events_board; ?></a>
        <a rel="nofollow" href="#skip-home-city" tabindex="7"><?php echo $skip_to_city_events; ?></a>
        <a rel="nofollow" href="#skip-home-partners" tabindex="8"><?php echo $skip_to_partners; ?></a>
        <a rel="nofollow" href="#skip-footer" tabindex="9"><?php echo $skip_to_footer; ?></a>
    <?php else: ?>
        <a rel="nofollow" href="#skip-main-content" tabindex="3"><?php echo $skip_to_main_content; ?></a>
        <a rel="nofollow" href="#skip-footer" tabindex="4"><?php echo $skip_to_footer; ?></a>
    <?php endif; ?>

</div>
