<?php
// Rename default "Posts" to "Projects"
function rename_posts_to_projects() {
    global $menu, $submenu;

    // Safely rename top-level menu "Posts" to "Projects"
    if (isset($menu[5][0])) {
        $menu[5][0] = 'Projects';
    }

    // Safely rename submenu items under Posts
    if (isset($submenu['edit.php'])) {
        foreach ($submenu['edit.php'] as &$item) {
            if ($item[0] === 'All Posts') {
                $item[0] = 'All Projects';
            } elseif ($item[0] === 'Add New') {
                $item[0] = 'Add Project';
            } elseif ($item[0] === 'Tags') {
                $item[0] = 'Project Tags';
            }
        }
    }

    // Change labels inside post editor
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Projects';
    $labels->singular_name = 'Project';
    $labels->add_new = 'Add Project';
    $labels->add_new_item = 'Add New Project';
    $labels->edit_item = 'Edit Project';
    $labels->new_item = 'Project';
    $labels->view_item = 'View Project';
    $labels->search_items = 'Search Projects';
    $labels->not_found = 'No Projects found';
    $labels->not_found_in_trash = 'No Projects found in Trash';
}
add_action('admin_menu', 'rename_posts_to_projects');
add_action('init', 'rename_posts_to_projects');

function portfolio_enqueue_styles() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_styles');