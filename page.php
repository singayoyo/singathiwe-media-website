<?php
/**
 * Page template.
 *
 * @package Singathiwe_Media
 */

require_once get_theme_file_path( '/inc/page-content.php' );
get_header();

$slug = get_post_field( 'post_name', get_queried_object_id() );
$data = singathiwe_media_page_content( $slug );
?>
<main id="main-content" class="relative z-10">
	<?php if ( $data ) : ?>
		<section class="max-w-7xl mx-auto px-6 md:px-8 pt-24 pb-16">
			<div class="max-w-4xl reveal">
				<p class="inline-flex rounded-full glass px-3 py-1.5 text-xs text-white/75 font-geist"><?php echo esc_html( $data['eyebrow'] ); ?></p>
				<h1 class="mt-6 text-5xl md:text-7xl font-geist tracking-tight leading-[.95]"><?php echo esc_html( $data['title'] ); ?></h1>
				<p class="mt-7 max-w-2xl text-lg md:text-xl text-slate-300 leading-relaxed"><?php echo esc_html( $data['intro'] ); ?></p>
			</div>
		</section>
		<section class="max-w-7xl mx-auto px-6 md:px-8 pb-24">
			<div class="grid md:grid-cols-2 lg:grid-cols-<?php echo count( $data['cards'] ) > 3 ? '4' : '3'; ?> gap-5">
				<?php foreach ( $data['cards'] as $card ) : ?>
					<article class="glass rounded-3xl p-7">
						<h2 class="text-2xl font-geist tracking-tight"><?php echo esc_html( $card[0] ); ?></h2>
						<p class="mt-3 text-slate-400 leading-relaxed"><?php echo esc_html( $card[1] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</section>
	<?php else : ?>
		<section class="max-w-4xl mx-auto px-6 md:px-8 py-24">
			<h1 class="text-5xl font-geist tracking-tight"><?php the_title(); ?></h1>
			<div class="mt-8 text-slate-300 leading-relaxed"><?php the_content(); ?></div>
		</section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>

