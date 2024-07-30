<?php
/**
 * Title: front-page
 * Slug: vividmono/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-big-site-title"} /-->

<!-- wp:group {"tagName":"main","style":{"dimensions":{"minHeight":"80vh"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:80vh;margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Hello there', 'vividmono');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('I\'m [Your Name], a passionate blogger, tech enthusiast, and open-source advocate. This is where I think. ', 'vividmono');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('About Me', 'vividmono');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('I\'m a husband, father and cat-dad. We live in Chesterfield, UK which is a great place for hiking and bike riding.', 'vividmono');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('I\'ve been tinkering with technology ever since I could remember, and my journey has led me to live online in the web and open-source communities. ', 'vividmono');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('What You’ll Find Here', 'vividmono');?></h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php esc_html_e('Thoughts on the web, both technology and culture', 'vividmono');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('The indieweb and the resurgence of personal webpages. Everyone should have a personal website!', 'vividmono');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Reflections on my life', 'vividmono');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Practical guides to various tech things', 'vividmono');?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Recent posts', 'vividmono');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":29,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"radius":"5px"}},"backgroundColor":"secondary","layout":{"inherit":false}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:5px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category","separator":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"post_tag","separator":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Continue reading →","showMoreOnNewLine":false} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /-->