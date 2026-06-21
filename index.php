<?php
/**
 * Fallback template.
 *
 * @package Singathiwe_Media
 */

get_header();
?>
<main id="main-content" class="relative z-10 max-w-5xl mx-auto px-6 md:px-8 py-24">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'glass rounded-3xl p-7 mb-6' ); ?>>
				<h1 class="text-3xl font-geist tracking-tight"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="mt-4 text-slate-300 leading-relaxed"><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'No content found.', 'singathiwe-media' ); ?></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>

