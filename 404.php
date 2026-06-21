<?php
/**
 * 404 template.
 *
 * @package Singathiwe_Media
 */

get_header();
?>
<main id="main-content" class="relative z-10 max-w-4xl mx-auto px-6 md:px-8 py-28 text-center">
	<p class="text-sm text-slate-400">404</p>
	<h1 class="mt-4 text-5xl md:text-7xl font-geist tracking-tight"><?php esc_html_e( 'This page moved beyond the moment.', 'singathiwe-media' ); ?></h1>
	<a class="page-link mt-8" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return home', 'singathiwe-media' ); ?></a>
</main>
<?php get_footer(); ?>

