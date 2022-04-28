</main>

<?php do_action('passle_demo_content_end'); ?>

</div>

<?php do_action('passle_demo_content_after'); ?>

<script type="text/javascript" src="https://clientweb.passle.it/v1/RemoteHostingBundle"></script>

<footer id="colophon" class="site-footer bg-gray-50 py-12 mt-4" role="contentinfo">
	<?php do_action('passle_demo_footer'); ?>

	<div class="container mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>