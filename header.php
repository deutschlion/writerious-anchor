<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo page_title('Error 404 – page not found'); ?> - <?php echo site_name(); ?></title>
	<link rel="stylesheet" href="<?php echo theme_url('styles.css') ?>"/>
	<meta name="description" content="<?php echo site_description(); ?>">
</head>
<body>
<div id="wrapper">
		<div id="header">
			<div id="logo-n-stuff">
				<h1 class="main-heading"><a href="<?php echo base_url(); ?>" title="<?php echo site_name(); ?> [go to homepage]"><?php echo site_name(); ?></a></h1>
				<span class="site-description"><?php echo site_description(); ?></span>
			</div><!-- \logo-n-stuff -->

			<?php if(has_menu_items()): ?>
				<div id="page-nav">
					<ul class="nav">
						<?php while(menu_items()): ?>	
						<li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
						<?php endwhile; ?>
					</ul>	
				</div>
			<?php endif; ?><!-- \page-nav -->
		</div><!-- \header -->	


