<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'page-shell text-slate-100 antialiased' ); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'singathiwe-media' ); ?></a>
<div class="fixed inset-0 pointer-events-none opacity-70 page-stars grid-lines" aria-hidden="true"></div>
<header class="relative z-20 border-b border-white/5">
	<div class="max-w-7xl mx-auto px-6 md:px-8 py-5 flex items-center justify-between gap-6">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Singathiwe Media home', 'singathiwe-media' ); ?>" class="logo-mark shrink-0"></a>
		<nav class="hidden lg:block" aria-label="<?php esc_attr_e( 'Primary navigation', 'singathiwe-media' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'primary-menu flex items-center gap-2',
					'fallback_cb'    => 'singathiwe_media_fallback_menu',
					'depth'          => 1,
				)
			);
			?>
		</nav>
		<div class="flex items-center gap-2">
			<details class="relative lg:hidden">
				<summary class="page-link cursor-pointer list-none" aria-label="<?php esc_attr_e( 'Open menu', 'singathiwe-media' ); ?>">
					<iconify-icon icon="solar:hamburger-menu-linear" width="18" height="18"></iconify-icon>
				</summary>
				<div class="absolute right-0 top-12 w-56 glass rounded-2xl p-2 z-50">
					<?php singathiwe_media_fallback_menu(); ?>
				</div>
			</details>
			<a class="page-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact', 'singathiwe-media' ); ?></a>
		</div>
	</div>
</header>

