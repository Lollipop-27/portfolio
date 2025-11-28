<?php
$projects = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 10,
));

if ($projects->have_posts()) : ?>
    <div class="projects-grid">
        <?php while ($projects->have_posts()) : $projects->the_post(); 
            $categories = wp_get_post_categories(get_the_ID(), array('fields' => 'slugs'));
            $cat_classes = implode(' ', $categories);
        ?>
            <div class="project-item <?php echo esc_attr($cat_classes); ?>">
                <?php the_post_thumbnail(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
<?php endif; ?>
