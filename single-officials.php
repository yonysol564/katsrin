<?php get_header();?>
	<?php 
		$langs = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');
		$ids = array();
		foreach($langs as $lang){
			$id = icl_object_id($post->ID,'officials',false,$lang['language_code']); 
			$ids[] = $id;
		}
		return $ids;
	?>
<?php get_footer(); ?>