<?php
  get_query_var('atts' , $atts);
  $post_id = $atts['id'];
  $post    = get_post( $post_id );
  setup_postdata( $post );
	?>
      <a class="abs_res_link" href="#">תושבים <button type="button" class="mobileOpenMegaMenu_arrow"></button></a>
      <div class="megaMenu">
        <div class="megaMenuTable">
          <ul class="megaMenu_ul">
          	<?php if( have_rows('megamenu_tabslinks') ): ?>
          	    <?php while ( have_rows('megamenu_tabslinks') ) : the_row();
          	        $megamenu_title = get_sub_field('megamenu_title');
          	      ?>
          	      <li><button type="button" class="megaMenu_btn"><?php echo $megamenu_title; ?></button></li>
          	    <?php endwhile; ?>
          	<?php endif;?>
          </ul>
          <?php if( have_rows('megamenu_tabslinks') ): ?>
        	  <?php while ( have_rows('megamenu_tabslinks') ) : the_row();
        	   $megamenu_img = get_sub_field('megamenu_img');
        	  ?>
	        	      <div class="megaMenu_sub_ulWrap">
				            <ul class="megaMenu_sub_ul">
							    <?php if( have_rows('sub_mega_menu') ): ?>
						        	<?php while ( have_rows('sub_mega_menu') ) : the_row();
					        	    		$sub_mega_menu_title = get_sub_field('sub_mega_menu_title');
					        	    		$sub_mega_menu_link  = get_sub_field('sub_mega_menu_link');
						        	 ?>
				                        <li><a href="<?php echo $sub_mega_menu_link; ?>"><?php echo $sub_mega_menu_title; ?></a></li>
							       	<?php endwhile; ?>
							    <?php endif;?>
				            </ul>
                    <?php if ($megamenu_img['url']) { ?>  
  				            <span class="megaMenuImgWrapper">
  				                <img src="<?php echo $megamenu_img['url']; ?>" alt="" class="megaMenuImg" />
  				            </span>
                    <?php } ?>
				          </div>
        	  <?php endwhile; ?>
        	<?php endif;?>
          <div class="clear"></div>
        </div>
      </div>
  <?php wp_reset_postdata();?>
