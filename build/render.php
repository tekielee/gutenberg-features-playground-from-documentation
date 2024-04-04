<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div style="width:100%;height:700px;border:1px solid red">
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Gutenberg Features Playground From Documentation – hello from a dynamic block!', 'gutenberg-features-playground-from-documentation' ); ?>
</p>
</div>
