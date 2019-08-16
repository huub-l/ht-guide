<ol class="hkb-breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList" <?php if ( ! hkb_show_knowledgebase_breadcrumbs() ) : ?>style="display:none;"<?php endif; ?>>
	<?php $last_item_index = count( $paths ) - 1; ?>
	<?php foreach ( $paths as $key => $component ) : ?>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<?php if ( $key == $last_item_index ) : ?>
				<span itemprop="item" class="last-crumb-mobile">
					<span itemprop="name"><?php
					$last_crumb = esc_html( $component['label'] );
					if(strlen($last_crumb) > 25){ echo substr($last_crumb,0,25)."..."; }
					else{ echo esc_html( $component['label'] ); }
					?></span>
				</span>

				<span itemprop="item" class="last-crumb-desktop">
					<span itemprop="name"><?php echo esc_html( $component['label'] ); ?></span>
				</span>
			<?php else : ?>
				<a itemprop="item" href="<?php echo esc_url( $component['link'] ); ?>">
					<span itemprop="name"><?php echo esc_html( $component['label'] ); ?></span>
					<svg class="hkb-breadcrumbs__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 34.1"><g><path d="M19,17c0,0.5-0.2,1-0.6,1.4L3.4,33.5c-0.8,0.8-2,0.8-2.8,0c-0.8-0.8-0.8-2,0-2.8L14.2,17L0.6,3.4c-0.8-0.8-0.8-2,0-2.8  c0.8-0.8,2-0.8,2.8,0l15.1,15.1C18.8,16,19,16.5,19,17z"/></g></svg>
				</a>
			<?php endif; ?>
			<meta itemprop="position" content="<?php echo esc_attr( $key + 1 ); ?>" />
		</li>
	<?php endforeach; ?>
</ol>
