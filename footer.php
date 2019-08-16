
<!-- CTA Block -->
<?php if ( !is_front_page() ) { ?>
<div class="cta-block">
	<div class="ht-container">
		<div class="cta-info">
			<h2><strong>Need to chat with an expert?</strong> </h2>
			<p>Can't find the answer you're looking for? Don't worry, we're here to help.</p>
			<a href="https://www.hellotech.com/" target="_blank"><button type="button" name="button">Visit HelloTech.com</button></a>
		</div>
		<div class="cta-img">
			<img src="<?php bloginfo('template_url'); ?>/img/tech-duo.png" alt="Techs">
		</div>
	</div>
</div>
<?php } ?>


<!-- .site-footer -->
<footer class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
<div class="ht-container">

	<?php $ht_setting__copyright = get_theme_mod( 'ht_setting__copyright' ); ?>
	<?php if ( '' != $ht_setting__copyright ) : ?>
		<div class="site-footer__copyright" role="contentinfo"><?php echo wp_kses_post( $ht_setting__copyright ); ?></div>
	<?php endif; ?>
	<?php if ( has_nav_menu( 'nav-site-footer' ) ) : ?>
		<nav class="nav-footer">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'nav-site-footer',
					'menu_id'         => false,
					'menu_class'      => false,
					'container_class' => false,
					'depth'           => 1,
				)
			);
			?>
		</nav>
	<?php endif; ?>

</div>
</footer>
<!-- /.site-footer -->

<?php wp_footer(); ?>

</div>
<!-- /.ht-site-container -->
</body>
</html>
