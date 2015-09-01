<!DOCTYPE html>
<html <?php language_attributes();?>>

	<head>
		<!-- <base href="/"> -->
		<title>Home | t0twpapi</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<?php wp_head();?>
	</head>

	<body>

		<header class="site-header">


		<h1><?php bloginfo('name');?></h1>
		<?php bloginfo('description');?>

			<nav class="btn--mainmenu" ng-class="{'button': !isActive, 'button active': isActive}" ng-init="isActive = false" ng-click="isActive = !isActive">
				<ul>
					<li>
						<a href="<?php echo site_url();?>">
							home
						</a>
					</li>
					<li>products</li>
					<li>contact</li>
				</ul>
			</nav>

		</header>

		<main class="site-main">
			Posts
		</main>

		<footer class="main-footer">
		<small><?php bloginfo('name');?>, <?php bloginfo('description');?> &copy; <?php echo date('Y');?> | <a class="icon-logo_sf2" href="http://sergiofores.net"></a></small>
		</footer>

		<?php wp_footer();?>
		<?php wp_loginout(); ?>

	</body>
</html>
