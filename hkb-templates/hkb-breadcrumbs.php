<?php
/*
*
* Breadcrumbs template
*
*/
?>

<!-- .hkb-breadcrumbs -->
<div class="hkb-breadcrumbs_wrap">
<?php $breadcrumbs_paths = ht_kb_get_ancestors(); ?>
	<?php $i = 0; ?>
	<?php foreach ( $breadcrumbs_paths as $index => $paths ) : ?>

		<?php if(is_single()){ ?>
			<?php
			$terms = get_the_terms($post->ID, 'ht_kb_category');
			if($_GET['cat_id']){
				if($terms[$i]->term_id == $_GET['cat_id']){
					include "hkb-breadcrumbs-list.php";
					break;
				}
			} else{
				include "hkb-breadcrumbs-list.php";
				break;
			} $i++;
				 ?>
		<?php }
		else{
			include "hkb-breadcrumbs-list.php";
		} ?>



	<?php endforeach; ?>
</div>
<!-- /.hkb-breadcrumbs -->
