<?php get_header(); ?>
<div id="content">
	<?php while(have_posts()): the_post() ?>
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="post_content">
			<div class="entry">
				<?php
				if(is_single())
					the_content('اقرأ المزيد');
				else
					the_excerpt();

				if(is_single())
				{?>
					<p class="metadata"><b>كتب بواسطة</b> <?php echo get_the_author(); ?>, <b>بتاريخ</b> <?php echo the_date('j F Y'); ?><br />
					<b> تحت الاقسام:</b> <?php the_category(', ') ?></p>
					<?php comments_template();
				}?>
			</div>
		</div>
	<?php endwhile; ?>		
</div>
<div class="pagebar"><p><?php posts_nav_link(); ?></p></div>
<?php get_footer(); ?>
