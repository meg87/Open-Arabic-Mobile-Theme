<?php get_header(); ?>
<div id="content">
	<?php while(have_posts()): the_post() ?>
		<?php
			if(is_single())
			{?>
				<div class="post">
					<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="metadata"><b>كتب بواسطة</b> <?php echo get_the_author(); ?> <b>في</b> <?php echo the_date('j F Y'); ?></div>
					<div class="post-content"><?php the_content('اقرأ المزيد'); ?></div>
					<div class="metadata">
						<b> الاقسام:</b> <?php the_category(', ') ?>
						<br /><?php echo get_the_tag_list('<b>الاوسمة:</b> ', ', ', '') ?>
					</div>
				</div>
				<?php comments_template(); ?>
				<div class="pagebar">
					<span class="previous"><?php previous_post('%', '« الصفحة السابقة', 'no'); ?></span>
					<span class="next"><?php next_post('%', 'الصفحة التالية »', 'no'); ?></span>
				</div>
			<?php }
			else
			{ ?>
				<div class="post">
					<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="post-content"><?php the_excerpt();?></div>
				</div>
			<?php } ?>
	<?php endwhile; ?>	
	<div class="pagebar">
		<span class="previous"><?php previous_posts_link("« الصفحة السابقة"); ?></span>
		<span class="next"><?php next_posts_link("الصفحة التالية »"); ?></span>
	</div>
</div>
<?php get_footer(); ?>
