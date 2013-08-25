<?php theme_include('header'); ?>

	<div id="posts">
		<?php if(has_posts()): ?>
			<?php while(posts()) : ?>
				<div class="post">
					<div class="post-desc">
						<h2 class="main-post-heading"><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
						<div class="post-stuff">
						Written by <?php echo article_author(); ?> on <?php echo article_date(); ?>. 
						</div><!-- \post-stuff -->
					</div><!-- \post-desc -->	
					<div class="post-content">
						<?php echo article_markdown(); ?>
					</div><!-- \post-content -->		 
				</div><!-- \post -->
				<div class="centerr">***</div>
			<?php endwhile; ?>	
		<?php endif; ?>
	</div><!-- \posts -->

	<?php if(has_pagination()): ?>
		<div class="pagination ">
			<?php echo posts_prev(); ?>
			<?php echo posts_next(); ?>
		</div><!-- pagination -->
	<?php endif; ?>

<?php theme_include('footer'); ?>		