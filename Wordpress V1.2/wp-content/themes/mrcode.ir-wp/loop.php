	<div class="mainbar">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="پیوند پایدار به <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <p>ارسال شده توسط <a href="#"><?php the_author(); ?></a> | در دسته بندی <?php echo get_the_category_list( ', ' ); ?></p>
          <div class="post">
			<?php the_content("خواندن ادامه مطلب"); ?>
			<?php wp_link_pages(); ?>
		  </div>
          <p><a href="<?php echo get_comments_link(); ?>" class="obg"><?php comments_number( '0', '1', '%' ); ?> دیدگاه</a> | <?php the_time(get_option( 'date_format' )); ?></p>
        </div>
		
		<?php
			if (is_singular() && comments_open() )
			{
				comments_template();
			}
		?>
		
<?php endwhile; ?>
<?php else : ?>
		<div class="article">
			<p>
				مطلبی پیدا نشد!
			</p>
		</div>
<?php endif; ?>
      </div>