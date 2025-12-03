<?php
/**
 * Filter Bar Template Part
 */
?>

<!-- wp:group {"tagName":"section","className":"filter-bar","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<section class="wp-block-group filter-bar">
    <!-- wp:paragraph {"className":"filter-label"} -->
    <p class="filter-label">Filter:</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"className":"filter-buttons"} -->
    <div class="wp-block-buttons filter-buttons">
        <!-- wp:button {"className":"filter-button"} -->
        <div class="wp-block-button filter-button"><a class="wp-block-button__link wp-element-button all"  href="#">All</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"filter-button"} -->
        <div class="wp-block-button filter-button"><a class="wp-block-button__link wp-element-button category-design"  href="#">Design</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"filter-button"} -->
        <div class="wp-block-button filter-button"><a class="wp-block-button__link wp-element-button category-coding"  href="#">Coding</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"filter-button"} -->
        <div class="wp-block-button filter-button"><a class="wp-block-button__link wp-element-button category-collaboration"  href="#">Collaboration</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"filter-button"} -->
        <div class="wp-block-button filter-button"><a class="wp-block-button__link wp-element-button category-development"  href="#">Development</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</section>
<!-- /wp:group -->
