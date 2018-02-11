<?php
	if( ! ys_is_active_related_post() ) {
		return;
	}
	$categories = ys_get_the_category_id_list();
	$args = array(
						'post__not_in' => array( get_the_ID() ),  //現在の投稿IDは除く
						'category__in' => $categories, //カテゴリー絞り込み
					);
	$related_posts = get_posts( ys_get_posts_args_rand( 5, $args ) );
	if( empty( $related_posts ) ){
		return;
	}
?>
<section class="entry-related entry__footer-section">
	<h2 class="entry-related__section-title">関連記事</h2>
	<div class="container">
		<div class="row--slide">
			<?php foreach ( $related_posts as $post ): setup_postdata( $post ); ?>
				<article class="entry-related__item col col__slide color_font-main">
					<a class="card" href="<?php the_permalink(); ?>">
						<div class="entry-list__thumbnail entry-list__mask-wrap card__img ratio ratio__4-3">
							<div class="ratio__item">
								<?php if( has_post_thumbnail() ): ?>
									<figure class="entry-list__figure ratio__image">
										<?php the_post_thumbnail(); ?>
									</figure>
								<?php else: ?>
									<div class="entry-list__no-img flex flex--c-c">
										<i class="fa fa-picture-o" aria-hidden="true"></i>
									</div><!-- .entry-list__no-img -->
								<?php endif; ?>
								<div class="entry-list__mask flex flex--c-c">
									<p class="entry-list__mask-text "><?php ys_the_entry_read_more_text(); ?></p>
								</div><!-- .entry-list__mask -->
							</div><!-- .ratio -->
						</div>
						<div class="entry-list__detail card__text">
							<?php the_title( '<h3 class="entry-title entry-related__title">', '</h3>' ); ?>
							<div class="entry__meta entry-list__meta color__font-sub flex flex--j-between">
								<p class="entry-list__cat"><i class="fa fa-folder-o" aria-hidden="true"></i><?php ys_the_entry_category( false ); ?></p><!-- .entry-list__cat -->
								<p class="entry-list__date"><i class="fa fa-calendar" aria-hidden="true"></i><time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time></p><!-- .entry-list__date -->
							</div>
						</div>
					</a>
				</article>
			<?php endforeach; wp_reset_postdata(); ?>
		</div><!-- .row-slide -->
	</div><!-- .container -->
</section><!-- .entry__related -->