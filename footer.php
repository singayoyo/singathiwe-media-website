<footer class="relative z-20 border-t border-white/5 bg-slate-950/80">
	<div class="max-w-7xl mx-auto px-6 md:px-8 py-14">
		<div class="grid gap-10 md:grid-cols-3">
			<div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-mark" aria-label="<?php esc_attr_e( 'Singathiwe Media home', 'singathiwe-media' ); ?>"></a>
				<p class="mt-4 text-sm text-slate-400 leading-relaxed max-w-sm"><?php esc_html_e( 'A South African digital-first media and activations agency building campaigns, content and digital systems that continue creating value after launch.', 'singathiwe-media' ); ?></p>
			</div>
			<div>
				<h2 class="text-sm font-medium text-white"><?php esc_html_e( 'Studio', 'singathiwe-media' ); ?></h2>
				<ul class="mt-4 space-y-3">
					<?php foreach ( singathiwe_media_nav_links() as $slug => $label ) : ?>
						<li><a class="text-sm text-slate-400 hover:text-white" href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><?php echo esc_html( $label ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div id="contact">
				<h2 class="text-sm font-medium text-white"><?php esc_html_e( 'Contact', 'singathiwe-media' ); ?></h2>
				<a class="mt-4 inline-flex text-sm text-slate-300 hover:text-white" href="mailto:ads@singathiwemedia.co.za">ads@singathiwemedia.co.za</a>
				<p class="mt-3 text-sm text-slate-500">+27 (000) 000-0000</p>
			</div>
		</div>
		<div class="mt-12 pt-6 border-t border-white/5 text-xs text-slate-500">
			&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> Singathiwe Media. <?php esc_html_e( 'All rights reserved.', 'singathiwe-media' ); ?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

