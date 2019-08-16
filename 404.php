<?php
/**
 * The template for displaying 404 pages (Not Found).
**/
get_header(); ?>


<div class="ht-page">
  <div class="ht-container">
    <div>
      <h2 class="hkb-archive__title">Select a category:</h2>
      <?php global $hkb_current_term_id, $tax_term; ?>
      <?php $tax_terms = hkb_get_archive_tax_terms(); ?>

      <!-- .hkb-archive -->
      <?php if ( $tax_terms ) : ?>

        <ul class="hkb-archive <?php echo esc_attr( ht_kbarchive_style() ); ?>">
          <?php foreach ( $tax_terms as $key => $tax_term ) : ?>
            <?php
            //set hkb_current_term_id
            $hkb_current_term_id    = $tax_term->term_id;
            $hkb_current_term_class = apply_filters( 'hkb_current_term_class_prefix', 'hkb-category--', 'archive' ) . $hkb_current_term_id;
            $hkb_current_term_class = apply_filters( 'hkb_current_term_class', $hkb_current_term_class, $hkb_current_term_id );
            ?>
          <li>

            <div class="hkb-category <?php echo esc_attr( ht_kbarchive_catstyle( $hkb_current_term_id ) ); ?> <?php echo esc_attr( $hkb_current_term_class ); ?>">

            <?php if ( get_theme_mod( 'ht_setting__kbarchivecatarticles', '0' ) != true ) : ?>
            <a class="hkb-category__link" href="<?php echo esc_attr( get_term_link( $tax_term, 'ht_kb_category' ) ); ?>">
            <?php endif; ?>

              <?php if ( hkb_has_category_custom_icon( $hkb_current_term_id ) == 'true' ) : ?>
                <div class="hkb-category__iconwrap"><?php hkb_category_thumb_img( $hkb_current_term_id ); ?></div>
              <?php endif; ?>

              <div class="hkb-category__content">
                <?php if ( get_theme_mod( 'ht_setting__kbarchivecatarticles', '0' ) == true ) : ?>
                  <a class="hkb-category__headerlink" href="<?php echo esc_attr( get_term_link( $tax_term, 'ht_kb_category' ) ); ?>">
                <?php endif; ?>

                <h2 class="hkb-category__title">
                  <?php echo esc_html( $tax_term->name ); ?>
                </h2>

                <?php if ( ( '' != $tax_term->description ) && get_theme_mod( 'ht_setting__kbarchivecatdesc', '1' ) == true ) : ?>
                  <div class="hkb-category__description"><?php echo esc_html( $tax_term->description ); ?></div>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'ht_setting__kbarchivecatarticles', '0' ) == true ) : ?>
                  </a>
                <?php endif; ?>

                <?php
                if ( get_theme_mod( 'ht_setting__kbarchivecatarticles', '0' ) == true ) :
                  $cat_posts = hkb_get_archive_articles( $tax_term, null, null, 'kb_home' );
                  ?>
                  <?php if ( ! empty( $cat_posts ) && ! is_a( $cat_posts, 'WP_Error' ) ) : ?>

                    <ul class="hkb-category__articlelist">
                      <?php foreach ( $cat_posts as $cat_post ) : ?>
                        <li>
                          <a href="<?php echo esc_url( get_permalink( $cat_post->ID ) ); ?>"><?php echo esc_html( get_the_title( $cat_post->ID ) ); ?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>

                  <?php endif; ?>
                <?php endif; ?>

              </div>

            <?php if ( get_theme_mod( 'ht_setting__kbarchivecatarticles', '0' ) != true ) : ?>
              </a>
            <?php endif; ?>
            </div>

          </li>
          <?php endforeach; ?>
        </ul>

      <?php else : ?>

        <div class="hkb-no-categories"><?php esc_html_e( 'No knowledge base categories to display', 'knowall' ); ?></div>

      <?php endif; ?>

    </div>
  </div>
</div>

<?php // Markup for 404 can be found in the header.php template ?>

<?php
get_footer();
