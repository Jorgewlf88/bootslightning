<?php
/**
 * Title: Theme footer elements
 * Slug: bootslightning/theme-footer
 * Categories: text
 * Inserter: no
 *
 * @package bootslightning
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"full","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} --><div class="wp-block-group text-muted">
<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size text-muted">
<?php esc_html_e( 'Copyright', 'bootslightning' ) . ' ' . date_i18n( _x( 'Y', 'copyright date format', 'bootslightning' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->
<?php echo bootslightning_privacy(); ?>
</div><!-- /wp:group -->
</div><!-- /wp:group -->