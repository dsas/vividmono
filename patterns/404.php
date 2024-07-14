<?php
/**
 * Title: 404
 * Slug: vividmono/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e('Sorry - there\'s nothing here', 'vividmono');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Try a search instead', 'vividmono');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"tight-footer"} /-->